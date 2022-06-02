define(
    [
        'ko',
        'jquery',
        'uiComponent',
        'mage/url',
        'Magento_Customer/js/model/customer',
        'Magento_Checkout/js/model/quote'
    ],
    function (ko, $, Component,url,customer,quote) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'CustomerBased_CheckoutCustomization/checkout/Checkoutcustomization'
            },
            isLogedIn: customer.isLoggedIn(),
            availableCountries : ko.observableArray(['--Please Select--', 'France', 'Germany', 'Spain']),
            chosenCountries : ko.observableArray(['--Please Select--']),
            initialize: function () {
                this._super();
                return this;
            },
            getCountry:function (data, event) {
                console.log(this.chosenCoutries());
            },
            initObservable: function () {

                this._super()
                .observe({
                    CheckVals: ko.observable(false)
                });
                var checkVal=0;
                self = this;
                this.CheckVals.subscribe(function (newValue) {
                    var linkUrls  = url.build('checkoutcustomization/checkout/saveInQuote');
                    if(newValue) {
                        checkVal = 1;
                    }
                    else{
                        checkVal = 0;
                    }
                    $.ajax({
                        showLoader: true,
                        url: linkUrls,
                        data: {checkVal : checkVal},
                        type: "POST",
                        dataType: 'json'
                    }).done(function (data) {
                        console.log('success');
                    });
                });

                return this;
            }
        });
    }
);