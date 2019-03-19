var form_entrepreneurs_api_url  = 'http://www.itumagnet.com/api/send_form?type=form_entrepreneurs';
var form_experts_api_url        = 'http://www.itumagnet.com/api/send_form?type=form_experts';
var form_startups_api_url       = 'http://www.itumagnet.com/api/send_form?type=form_startups';
var contact_form_api_url        = 'http://www.itumagnet.com/api/send_form?type=contact_form';
var event_form_api_url          = 'http://www.itumagnet.com/api/send_form?type=event_form';
var file_upload_api             = 'http://www.itumagnet.com/api/file_upload';

var ITU = {

    init: function() {

        $('.btn-scroll-top').bind('click', function() { $("html, body").animate({ scrollTop: 0 }, 1500); return false; })
        $('#anasayfa .section1 .btn-small, #homepage .section1 .btn-small').bind('click', ITU.switchHomeBoxes);
        $('#SubmitLightbox #formSuccess .link-detail, #SubmitLightbox .close-button').bind('click', ITU.Lightbox.hide);
        $('#messageBtn').bind('click',ITU.Lightbox.showMessage);
        $('.sss .item').bind('click', ITU.onSssClick);

        // PLUGINS (dropdown, datepicker, max checker, light gallery, bx slider)
        $('select').material_select();
        $('.datepicker').pickadate({

            selectMonths: true,
            selectYears: 15,
            format: 'dd mmmm, yyyy',
            max: true,
            monthsFull: [ 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık' ],
            monthsShort: [ 'Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara' ],
            weekdaysFull: [ 'Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi' ],
            weekdaysShort: [ 'Pzr', 'Pzt', 'Sal', 'Çrş', 'Prş', 'Cum', 'Cmt' ],
            today: 'Bugün',
            clear: 'Sil',
            close: 'Kapat',
            firstDay: 1,
            formatSubmit: 'yyyy/mm/dd',
            closeOnSelect: true
        });
        $("input[type=number]").bind('keypress', ITU.Helpers.checkMax);
        $("#lightgallery").lightGallery();

        ITU.Slider.init();
        ITU.Form.init();
        ITU.Helpers.eventPosFixer();
        ITU.Uploader.init();
    },

    switchHomeBoxes : function() {

        var thisItem = $(this);
        var targetID = parseInt(thisItem.data('box'));
        var toChange = $('#infoBox' + targetID);

        var tmpAvatar = $('#infoBox1 > img').attr('src');
        var tmpTitle = $('#infoBox1 > h2').html();
        var tmpContent = $('#infoBox1 > div > p').html();
        var tmpLink = $('#infoBox1 > div > a').attr('href');

        var smallBoxTop = parseInt(toChange.css('top'));
        var smallBoxLeft = parseInt(toChange.css('left'));

        var smallBoxTopTo = (targetID == 2) ? (smallBoxTop - 50) : (smallBoxTop + 50);
        var smallBoxRightTo = (targetID == 2) ? '19%' : '12%';

        var smallBoxTopReturn = (targetID == 2) ? 238 : 438;
        var smallBoxRightReturn = (targetID == 2) ? '21%' : '14%';

        //toChange.css({ left:smallBoxLeft, top:smallBoxTop });
        toChange.removeClass('hasAnim');
        toChange.animate({right: smallBoxRightTo, top: smallBoxTopTo, opacity: 0}, function () {

            $('#infoBox1 > img').attr('src', $('#infoBox' + targetID + ' > img').attr('src'));
            $('#infoBox' + targetID + ' > img').attr('src', tmpAvatar);

            $('#infoBox1 > h2').html($('#infoBox' + targetID + ' > h2').html());
            $('#infoBox' + targetID + ' > h2').html(tmpTitle);

            $('#infoBox1 > div > p').html($('#infoBox' + targetID + ' > div > p').html());
            $('#infoBox' + targetID + ' > div > p').html(tmpContent);

            $('#infoBox1 > div > a').attr('href', $('#infoBox' + targetID + ' > div > a').data('link'));
            $('#infoBox' + targetID + ' > div > a').data('link', tmpLink);

            $('#infoBox1').animate({left: 45, opacity: 1});

            toChange.animate({right: smallBoxRightReturn, top: smallBoxTopReturn, opacity: 0.7}, function () {

                toChange.addClass('hasAnim');
            });
        });

        $('#infoBox1').animate({left: -5, opacity: 0});

        return false;
    },

    onSssClick: function() {

        var item = $(this);
        var isSame = item.hasClass('active');

        $('.sss .item.active').removeClass('active');

        if (!isSame) {
            item.addClass('active');
            $('.sss').addClass('opened');
        } else {
            $('.sss').removeClass('opened');
        }

        return false;
    },

    Lightbox: {

        toRedirect: false,
        
        showMessage: function() {

            $('#SubmitLightbox .white-box').addClass('hidden');
            $('#messageForm').removeClass('hidden');

            ITU.Lightbox.show();

            return false;
        },

        showSuccess: function() {

            $('#SubmitLightbox .white-box').addClass('hidden');
            $('#formSuccess').removeClass('hidden');

            ITU.Lightbox.show();
        },

        showLoading: function() {

            $('#SubmitLightbox .white-box').addClass('hidden');
            $('#formLoading').removeClass('hidden');

            ITU.Lightbox.show();
        },

        show: function() {

            $('#SubmitLightbox').removeClass('hide-this').addClass('show');
            $('body').addClass('blocked');

        },

        hide: function() {

            $('#SubmitLightbox').removeClass('show');

            setTimeout(function() {

                if (ITU.Lightbox.toRedirect && $('#girisimci-basvuru-formu').length) {

                    window.location = '/girisimciler';

                } else if (ITU.Lightbox.toRedirect && $('#entrepreneur-form').length) {

                    window.location = '/en/entrepreneur';

                } else if (ITU.Lightbox.toRedirect && $('#katilimci-basvuru').length) {

                    window.location = '/katilimci';

                } else if (ITU.Lightbox.toRedirect && $('#participant-application-form').length) {

                    window.location = '/en/participant';

                } else if (ITU.Lightbox.toRedirect && $('#girisimci-firma-basvuru').length) {

                    window.location = '/girisimci-firma';

                } else if (ITU.Lightbox.toRedirect && $('#startup-application-form').length) {

                    window.location = '/en/startup';

                } else {

                    $('body').removeClass('blocked');
                    $('#SubmitLightbox').addClass('hide-this');
                }

            }, 600);

            return false;
        }
    },

    Form : {

        AdditionalPersonFields: null,

        init: function() {

            // generic functions
            $('.req-checked').bind('change', ITU.Form.radioOnChecked);
            $('select.req-string').bind('change', ITU.Form.dropdownOnChange);
            $('.formGroupSwitch').bind('change',ITU.Form.groupSwitch);

            // semi-generic functions
            $('.competenceInputs input').bind('change', ITU.Form.competenceCountCheck);
            $('[name*="projectTech"]:not([name="projectTech25"])').bind('change', ITU.Form.technologyCountCheck);
            $('#sector').bind('change', ITU.Form.onSectorChange);
            $('#sectorChildren select.sector-child').bind('change', ITU.Form.onAltSectorChange);
            $('#targetSector').bind('change', ITU.Form.onTargetSectorChange);
            $('#targetSectorChildren select.sector-child').bind('change', ITU.Form.onTargetAltSectorChange);

            // page-specific functions
            ITU.Form.AdditionalPersonFields = $('#otherPeopleInfo').html();
            $('#groupOtherCount').bind('change', ITU.Form.groupOtherCountChange);
            $('[name="groupFixedChair"]').bind('change', ITU.Form.calculateGroupTotalPrice);
            $('#personalType').bind('change', ITU.Form.calculatePersonalTotalPrice);

            $('#addReferenceBtn').bind('click', ITU.Form.addReferenceBtn);
            $('#removeReferenceBtn').bind('click', ITU.Form.removeReferenceBtn);

            $('input[name="groupOrPersonal"], #groupOtherCount').bind('change', ITU.Form.competenceMaxSetter);

            ITU.Form.limitEndDate();
            ITU.Form.formSubmitInits();
        },

        limitEndDate: function() {

            if ($('#ITUStartDate').length > 0) {

                var startDateP = $('#ITUStartDate').pickadate('picker');
                var endDateP = $('#ITUEndDate').pickadate('picker');

                startDateP.on({
                    set: function(thingSet) {

                        endDateP.set('min',new Date(thingSet.select));
                        $('#ITUEndDate').val('').siblings('.active').removeClass('active');
                    }
                });
            }
        },

        // generic functions
        groupSwitch: function() {

            var section = $(this).data('section');
            var choice  = $(this).data('choice');
            var toShow  = $('#formChoice'+section+'-'+choice);

            $('.formGroup'+section).addClass('hidden').removeClass('inputsToCheck');
            $('.formGroup'+section+' .invalid').removeClass('invalid');
            toShow.removeClass('hidden').addClass('inputsToCheck');
        },

        radioOnChecked : function() {

            $(this).closest('.row').prev().children().removeClass('invalid');
        },

        dropdownOnChange: function() {

            $(this).removeClass('invalid');
            $(this).parent().removeClass('invalid').removeClass('req-string');
            $(this).siblings('.select-dropdown').addClass('valid');
        },

        onError: function() {

            // lets check other possibilities
            ITU.Form.competenceCountCheck();
            ITU.Form.technologyCountCheck();

            if (!$('#kvk').prop('checked')) {
                $('#kvk').addClass('invalid');
                $('#kvk').closest('.row').find('a').css({'color': 'red', 'font-weight': 'bold'});
            } else {
                $('#kvk').removeClass('invalid').css({'color': '', 'font-weight': ''});
            }

            var allInvalid      = $('.inputsToCheck .invalid');
            var firstInvalid    = $('.inputsToCheck .invalid:first');

            if (allInvalid.length > 0) {

                if (firstInvalid.is('input')) {
                    firstInvalid.focus();
                } else {
                    $("html, body").stop().animate({ scrollTop: firstInvalid.offset().top - 100 }, 1000);
                }
            }

            // for debug
            console.warn('invalid alan var ('+allInvalid.length+')');
            console.log(allInvalid);

            return allInvalid.length > 0;
        },

        // specific function
        groupOtherCountChange: function() {

            var count = parseInt($(this).val());

            $('#groupFixedChair > .row:not(.dont-hide)').removeClass('hidden');
            $($('#groupFixedChair > .row:not(.dont-hide)')[count+1]).nextAll(':not(.dont-hide)').addClass('hidden');
            $('#groupFixedChair').removeClass('hidden');
            $('#groupFixedChair .s6 input:checked').prop('checked',false);
            $('#groupFixedChair .s6 input:first').prop('checked',true);

            for (var i = 0; i < $('#groupFixedChair .s6 label span').length ; i++) {

                $($('#groupFixedChair .s6 label span')[i]).html(count - i + 1);
            }

            $('#priceTag2').html((count+1)*600);

            if ($('body').attr('id') == 'katilimci-basvuru') {

                // RESET
                $('#otherPeopleInfo').html(ITU.Form.AdditionalPersonFields);

                // SHOW RELATED ONES
                if (count > 0) {
                    $('.additional-person').removeClass('hidden');
                    $($('.additional-person')[count-1]).nextAll('.additional-person').remove();
                    $('#otherPeopleInfo').removeClass('hidden');
                } else {
                    $('#otherPeopleInfo').html('');
                }
            }

        },

        competenceMaxSetter: function() {

            var totalPerson;
            var compInputs = $('.competenceInputs input[type="number"]');

            // reset inputs
            compInputs.val('').removeClass('valid').removeClass('invalid').siblings('label').removeClass('active');

            if ($('input[name="groupOrPersonal"]:checked').val() == "Bireysel") {

                totalPerson = 1;

            } else {

                if ($('#groupOtherCount').val() == null) {

                    totalPerson = 2;

                } else {

                    totalPerson = parseInt($('#groupOtherCount').val()) + 1;
                }
            }

            compInputs.attr('max',totalPerson);
        },

        calculateGroupTotalPrice: function() {

            var total       = parseInt($('#groupOtherCount').val()) + 1;
            var dedicated   = parseInt($(this).val());
            var shared      = total - dedicated;

            $('#priceTag2').html(dedicated*1020 + shared*600);
        },

        calculatePersonalTotalPrice: function() {

            var result      = ($(this).val() == 'Paylaşımlı Koltuk') ? 600 : 1020;

            $('#priceTag1').html(result);
        },

        competenceCountCheck: function() {

            var peopleCount = ($('[name="groupOrPersonal"]:checked').val() == "Bireysel") ? 1 : parseInt($('#groupOtherCount').val())+1;
            var totalCount = 0;
            for (var i = 1; i < 10; i++) {
                totalCount += ($('#competence'+i+'Count').val() != '') ? parseInt($('#competence'+i+'Count').val()) : 0;
            }
            if (totalCount < peopleCount) {
                $('#competenceTitle').addClass('invalid');
                return false;
            } else {
                $('#competenceTitle').removeClass('invalid');
                return true;
            }
        },

        technologyCountCheck: function() {

            var result = false;

            for (var i = 1; i < 25; i++) {
                result = result || $('[name="projectTech'+i+'"]').is(':checked');
            }

            if (result) {
                $('#projectTechTitle').removeClass('invalid');
                return true;
            } else {
                $('#projectTechTitle').addClass('invalid');
                return false;
            }
        },

        onSectorChange: function() {

            var thisVal = $(this).val();

            $('#sectorChildren').removeClass('hidden');
            $('#sectorChildren .active').removeClass('active');
            $('#sectorChildren .invalid').removeClass('invalid');
            $('#sectorChildren .sector-'+thisVal).closest('.select-wrapper').addClass('active');
        },

        onAltSectorChange: function() {

            var thisVal = $(this).val();

            $('#sectorChildren .active').removeClass('invalid');
            $('#sectorChildren .active input').addClass('valid');
            $("#altSector").val(thisVal);
        },

        onTargetSectorChange: function() {

            var thisVal = $(this).val();

            $('#targetSectorChildren').removeClass('hidden');
            $('#targetSectorChildren .active').removeClass('active');
            $('#targetSectorChildren .invalid').removeClass('invalid');
            $('#targetSectorChildren .sector-'+thisVal).closest('.select-wrapper').addClass('active');
        },

        onTargetAltSectorChange: function() {

            var thisVal = $(this).val();

            $('#targetSectorChildren .active').removeClass('invalid');
            $('#targetSectorChildren .active input').addClass('valid');
            $("#targetAltSector").val(thisVal);
        },

        addReferenceBtn: function() {

            var refTotal = $('.formGroup2 .additional-reference').length;

            if (refTotal == 2) {
                $(this).addClass('hidden');
            }

            $('#removeReferenceBtn').removeClass('hidden');
            $('.additional-reference.ref'+(refTotal+1)).appendTo('.reference-container');

            return false;
        },

        removeReferenceBtn: function() {

            var refTotal = $('.formGroup2 .additional-reference').length;

            if (refTotal == 2) {
                $(this).addClass('hidden');
            }

            $('#addReferenceBtn').removeClass('hidden');
            $('.additional-reference.ref'+refTotal).appendTo('.hidden-reference-container');

            return false;
        },

        // form validations
        formSubmitInits: function() {

            // girisimci formu
            $('#girisimciFormSubmit').formValidator({

                scope: '#girisimciForm .inputsToCheck',
                errorClass: 'invalid',
                onSuccess: function() {

                    if(!ITU.Form.onError()) {

                        $("input").not(".inputsToCheck input").remove();
                        $("textarea").not(".inputsToCheck textarea").remove();
                        $("select").not(".inputsToCheck select").remove();

                        $.post(form_entrepreneurs_api_url,$('#girisimciForm').serialize(), function(data) {

                            ITU.Lightbox.toRedirect = true;
                            ITU.Lightbox.showSuccess();
                        });
                    }

                },
                onError: function() {

                    ITU.Form.onError();
                    return false;
                },
                extraBool: function() {

                    var result = true;

                    // yetkinlik sayısını kontrolü
                    result = result && ITU.Form.competenceCountCheck();

                    // teknoloji checkbox seçili mi kontrolü
                    result = result && ITU.Form.technologyCountCheck();

                    return result;
                }

            });

            // ekosistem formu
            $('#ekosistemFormSubmit').formValidator({

                scope: '#ekosistemForm .inputsToCheck',
                errorClass: 'invalid',
                onSuccess: function() {

                    if(!ITU.Form.onError()) {

                        $("input").not(".inputsToCheck input").remove();
                        $("textarea").not(".inputsToCheck textarea").remove();
                        $("select").not(".inputsToCheck select").remove();

                        $.post(form_experts_api_url, $('#ekosistemForm').serialize(), function (data) {

                            ITU.Lightbox.toRedirect = true;
                            ITU.Lightbox.showSuccess();
                        });
                    }

                },
                onError: function() {

                    ITU.Form.onError();
                    return false;
                }

            });

            // startup formu
            $('#startupFormSubmit').formValidator({

                scope: '#startupForm .inputsToCheck',
                errorClass: 'invalid',
                onSuccess: function() {

                    if(!ITU.Form.onError()) {

                        $("input").not(".inputsToCheck input").remove();
                        $("textarea").not(".inputsToCheck textarea").remove();
                        $("select").not(".inputsToCheck select").remove();

                        $.post('http://www.itumagnet.com/api/send_form?type=form_startups',$('#startupForm').serialize(), function(data) {

                            ITU.Lightbox.toRedirect = true;
                            ITU.Lightbox.showSuccess();
                        });
                    }

                },
                onError: function() {

                    ITU.Form.onError();
                    return false;
                },
                extraBool: function() {

                    var result = true;

                    // yetkinlik sayısını kontrolü
                    result = result && ITU.Form.competenceCountCheck();

                    // teknoloji checkbox seçili mi kontrolü
                    result = result && ITU.Form.technologyCountCheck();

                    return result;
                }

            });

            // contact formu
            $('#contactSubmit').formValidator({

                scope: '#contactArea',
                errorClass: 'invalid',
                onSuccess: function() {

                    ITU.Lightbox.showLoading();

                    $.post(contact_form_api_url,$('#contactArea').serialize(), function(data) {

                        $('#contactArea')[0].reset();
                        $('#contactArea label').removeClass('active');

                        ITU.Lightbox.showSuccess();
                    });
                }
            });

            // etkinlik formu
            $('#eventFormSubmit').formValidator({

                scope: '#eventFormArea',
                errorClass: 'invalid',
                onSuccess: function() {

                    ITU.Lightbox.showLoading();

                    $.post(event_form_api_url,$('#eventFormArea').serialize(), function(data) {

                        $('#eventFormArea')[0].reset();
                        $('#eventFormArea label').removeClass('active');

                        ITU.Lightbox.showSuccess();
                    });
                }
            });

        }
    },

    Slider: {

        current: null,

        init: function() {

            ITU.Slider.build(1);

            $('.filter-menu a').bind('click', ITU.Slider.change);
        },

        build: function(item) {

            ITU.Slider.current = $('.bxslider-'+item).bxSlider({
                minSlides: 5,
                maxSlides: 5,
                slideWidth: 140,
                slideMargin: 60,
                infiniteLoop: false,
                pager: false,
                hideControlOnEnd: true
            });

            $('.bxslider-home').bxSlider({
                minSlides: 1,
                maxSlides: 1,
                slideMargin: 0,
                infiniteLoop: true,
                pager: false,
                controls: false,
                auto: true,
                speed: 1000,
                easing: 'ease-in-out'
            });
        },

        change: function() {

            var activeItem = $('.filter-menu a.active');
            var active = activeItem.index();
            var next = $(this).index();

            // destroy previous one
            ITU.Slider.current.destroySlider();
                $('.bxslider-'+(active+1)).addClass('hidden');

            // change menu
            activeItem.removeClass('active');
            $(this).addClass('active');

            // build next
            $('.bxslider-'+(next+1)).removeClass('hidden');
            ITU.Slider.build(next+1);

            return false;
        }

    },

    Helpers: {

        eventPosFixer: function() {

            if ($("#etkinlikler .event-item:eq(0)").height() > $("#etkinlikler .event-item:eq(1)").height()) {
                $("#etkinlikler .event-item:eq(3)").insertBefore("#etkinlikler .event-item:eq(2)")
            }
        },

        checkMax : function(event) {

            var keys = [
                8, // backspace
                9, // tab
                13, // enter
                46, // delete
                37, 39, 38, 40 // arrow keys<^>v
            ];
            var addedNumber = 0;
            var nextTotal = ($(this).val() == "") ? 0 : parseInt($(this).val());

            if((event.keyCode >= 48 && event.keyCode <=57) || (event.keyCode >= 96 && event.keyCode <=105)) {
                addedNumber = (event.keyCode < 60) ? (event.keyCode % 48) : ((event.keyCode/2) % 48);
                nextTotal = nextTotal*10+addedNumber;
            }

            if  (
                    nextTotal > parseInt($(this).attr("max")) &&
                    $.inArray(event.which, keys) == -1 &&
                    ITU.Helpers.isTextSelected() == false
                ) {

                event.preventDefault();
                return false;
            }

        },

        isTextSelected: function() {
            // set text variable
            text = "";
            if (window.getSelection) {
                text = window.getSelection().toString();
            } else if (document.selection && document.selection.type != "Control") {
                text = document.selection.createRange().text;
            }
            return (text.length > 0);
        }
    },


    Uploader : {

        init: function() {

            $(document.body).on('change', 'input[type=file]', function() {

                ITU.Lightbox.showLoading();

                var hiddenInput = $(this).siblings('.hiddenCV');

                var data = new FormData();
                $.each(event.target.files, function(key, value)
                {
                    data.append('attachment', value);
                });

                $.ajax({
                    url: 'http://www.itumagnet.com/api/file_upload',
                    type: 'POST',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data, textStatus, jqXHR)
                    {
                        if(typeof data.error === 'undefined')
                        {
                            // Success so call function to process the form
                            hiddenInput.val(data.data.file_url);

                            ITU.Lightbox.hide();
                        }
                        else
                        {
                            console.log('ERRORS: ' + data.error);
                            ITU.Lightbox.hide();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        console.log('ERRORS: ' + textStatus);
                        ITU.Lightbox.hide();
                    }
                });
            });
        }
    }

};

$(document).ready(function() {
    ITU.init();
    var head = jQuery("#map-iframe").contents().find("head");
    var css = '<style type="text/css">' +
            '.place-card-large{display:none}; ' +
            '</style>';
    jQuery(head).append(css);
});