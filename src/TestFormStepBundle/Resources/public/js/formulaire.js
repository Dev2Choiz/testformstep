
var TFS = (function() {
    "use strict";

    var evenement = function () {
        var thisTFS = this;
        $('form#formStep input[type=submit]').click(function(event) {
            event.preventDefault();
            var formData = new FormData($("#formStep")[0]);
            var url = thisTFS.url + thisTFS.currentStep + "/" + $(this).data('target');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
                    thisTFS.currentStep = result.currentStep;
                    thisTFS.updateView(result);
                }
            });
        });
    };


    var subEvenement = function () {
        $("#formtest1_etape4_file").removeClass("form-control");
    };

    var updateView = function (result) {
        if (! result.end) {
            $("#formStepContent").html(result.view);
            $("#collapsePreview div.contentPreview").html(result.preview);
            this.subEvenement();
        } else {
            $(".formStepStyle").html(result.view);
        }
    };



    var url         = formulaire_url;
    var listStep    = formulaire_listStep;
    var offset      = formulaire_offset;
    var currentStep = formulaire_currentStep;

    var initVariables = function () {
        this.url         = formulaire_url;
        this.listStep    = formulaire_listStep;
        this.offset      = formulaire_offset;
        this.currentStep = formulaire_currentStep;
    };

    var init = function () {
            var thisTFS = this;
            $.ajax({
                url: thisTFS.url + thisTFS.currentStep,
                method: 'post',
                success: function(result) {
                    this.currentStep = result.currentStep;
                    $("#formStepContent").html(result.view);
                    $("#collapsePreview div.contentPreview").html(result.preview);
                }
            });
            this.evenement();
    };

    return {
        evenement: evenement,
        subEvenement: subEvenement,
        updateView: updateView,
        initVariables: initVariables,
        init: init,
    };
})();

TFS.initVariables();
TFS.init();
