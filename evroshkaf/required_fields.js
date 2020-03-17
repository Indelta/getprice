$(document).ready(function() {
    $('.rf').each(function() {
        var form = $(this);
        var btn = form.find('.btn_submit');
        form.find('.rfield').addClass('empty_field');

        // Функция проверки полей формы
        function checkInput() {
            form.find('.rfield').each(function () {
                var newVal = $(this).val();
                newVal = newVal.replace(/\D+/g, '');
                if (newVal > 4) {
                    $(this).removeClass('empty_field');
                } else {
                    $(this).addClass('empty_field');
                }
            });
        }

        // Функция подсветки незаполненных полей
        function lightEmpty() {
            form.find('.empty_field').css({'background': '#d8512d'});
            setTimeout(function () {
                form.find('.empty_field').removeAttr('style');
            }, 500);
        }

        setInterval(function () {
            checkInput();
            var sizeEmpty = form.find('.empty_field').length;
            if (sizeEmpty > 0) {
                if (btn.hasClass('disabled')) {
                    return false
                } else {
                    btn.addClass('disabled')
                }
            } else {
                btn.removeClass('disabled')
            }
        }, 500);

        btn.click(function () {
            if ($(this).hasClass('disabled') || $(this).closest(form).find('.rfield ').val().length<7) {
                lightEmpty();
                return false
            } else {
                form.submit();
            }
        });
    });
});