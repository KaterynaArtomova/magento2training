define([
    'jquery',
    'ko',
    'uiComponent'
], function ($, ko, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            url: '',
            reviewerName: ko.observable(''),
            reviewerMessage: ko.observable(''),
            isLoading: ko.observable(false),
        },
        /** @inheritdoc */
        initialize: function () {
            this._super();
        },
        nextReview: function () {
            let self = this;
            $.ajax({url: this.url, method: 'GET', dataType: 'json'})
                .done(function (data) {
                    self.reviewerName(data.reviewerName);
                    self.reviewerMessage(data.reviewerMessage);
                });
        }
    });
});
