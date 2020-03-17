<?php
    ini_set('log_errors', 'On');
    ini_set('error_log', __DIR__ . '/php_errors.log');

    class AMO {
        private $user_login = null;
        private $user_hash = null;
        private $subdomain = null;

        private $newLeadId = null;
        private $contacts = null;

        /**
         * set_auth_data(login(String), hash(String), subdomain(String))
         * Подставляет логин, хэш и субдомен пользователя
         */
        private function set_auth_data ($login = "", $hash = "", $subdomain = "") {
            $this->user_login = $login;
            $this->user_hash = $hash;
            $this->subdomain = $subdomain;
        }

        /**
         * Авторизация в системе
         */
        public function auth ($login, $hash, $subdomain) {
            $this->set_auth_data($login, $hash, $subdomain);
            if ($this->user_login && $this->user_hash && $this->subdomain) {
                $link = "https://" . $this->subdomain . ".amocrm.ru/private/api/auth.php?type=json";

                $user = array(
                    "USER_LOGIN" => $this->user_login,
                    "USER_HASH" => $this->user_hash
                );

                $curl=curl_init(); 

                curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
                curl_setopt($curl,CURLOPT_URL,$link);
                curl_setopt($curl,CURLOPT_POST,true);
                curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($user));
                curl_setopt($curl,CURLOPT_HEADER,false);
                curl_setopt($curl,CURLOPT_COOKIEFILE, __DIR__.'/cookie.txt');
                curl_setopt($curl,CURLOPT_COOKIEJAR, __DIR__.'/cookie.txt'); 
                curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

                $out = curl_exec($curl);
                
                curl_close($curl);
                
                $Response = json_decode($out, true);
                $Response = $Response['response'];
                if (isset($Response['auth'])) return true;
                else throw new Exception("Не удалось авторизоваться!");
            }
            else throw new Exception("Login, hash and subdomain are required!");
        }
        /**
         * Добавляет сделки в crm
         * @params
         * $dataLead = array()
         */
        public function add_leads ($leads) {
            $link = 'https://' . $this->subdomain . '.amocrm.ru/private/api/v2/json/leads/set';
            $data = array(
                "request" => array(
                    "leads" => array(
                        "add" => $leads
                    )
                )
            );

            $curl = curl_init();

            curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
            curl_setopt($curl,CURLOPT_URL,$link);
            curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
            curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($data));
            curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
            curl_setopt($curl,CURLOPT_HEADER,false);
            curl_setopt($curl,CURLOPT_COOKIEFILE, __DIR__.'/cookie.txt');
            curl_setopt($curl,CURLOPT_COOKIEJAR, __DIR__.'/cookie.txt');
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

            $out = curl_exec($curl);
            $Response = json_decode($out, true);
            $Response = $Response['response'];
            // Получаем код ошибки, если он есть
            if (isset($Response['error']) && isset($Response['error_code'])) {
                $this->set_error($Response['error_code'], $Response['error']);
            }
            else $this->newLeadId = $Response['leads']['add'][0]['id'];
            return $this->newLeadId; 
        }
        public function add_contact($contact) {
            if ($this->newLeadId) {
                $contact['linked_leads_id'] = array($this->newLeadId);
                $data = array(
                    "request" => array(
                        "contacts" => array(
                            "add" => array(
                                $contact
                            )
                        )
                    )
                );
                $link='https://'.$this->subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
                curl_setopt($curl, CURLOPT_URL, $link);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_COOKIEFILE, __DIR__.'/cookie.txt');
                curl_setopt($curl,CURLOPT_COOKIEJAR, __DIR__.'/cookie.txt');
                curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

                $out = curl_exec($curl);
                $Response = json_decode($out, true);
                $Response = $Response['response'];
                if (isset($Response['error']) && isset($Response['error_code'])) {
                    $this->set_error($Response['error_code'], $Response['error']);
                }
                else $this->contacts = $Response['contacts']['add'];
                return $this->contacts; 

            }
            else throw new Exception("Lead id is not defined");
            
        }
        public function log_out () {
            unlink(__DIR__.'/cookie.txt');
        }
        private function set_error($code, $mes) {
            $errors = array(
                110 => "Не правильный логин или пароль",
                111 => "Слишком много неудачных попыток авторизации",
                101 => "Запрос к несуществующему аккаунту",
                103 => "Параметры не переданы",
                104 => "Запрашиваемый метод API не найден",
                201 => "Добавление контактов: пустой массив",
                202 => "Добавление контактов: нет прав",
                203 => "Добавление контактов: Системная ошибка при работе с доп. полями",
                205 => "Добавление контактов: контакт не создан",
                213 => "Добавление сделок: пустой массив",
            );
            $code = (int)$code;
            if (isset($errors[$code])) {
                throw new Exception($errors[$code]);
            }
            else throw new Exception("Undescribed error with code $code Message: $mes");
        }
    }
?>