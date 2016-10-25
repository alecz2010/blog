/*
// ..\..\public\js\generic\src\ModalBuilder.js
*/

/**
 * Created by Alex on 10/24/2016.
 */

$(function() {

    var Generic = Generic || {};

    Generic.ModalBuilder = function () {
        var newModal = function (title, options) {
            options = $.extend({
                show: false,
                backdrop: 'static'
            }, options);

            if (!title) {
                title = '';
            }

            var $modal = (
                '<div class="modal fade">'
                + '<div class="modal-dialog">'
                + '<div class="modal-content">'
                + '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">' + title + '</h4></div>'
                + '<div class="modal-body"></div>'
                + '<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">No</button><button type="button" class="btn btn-primary btn-blue">Yes</button></div>'
                + '</div>'
                + '</div>'
                + '</div>'
            );

            modal.on('shown.bs.modal', function () {
                var $mod = $modal.find('.modal-footer .btn-primary');
                $mod.focus();
            });
            modal.on('hidden-bs.modal', function () {
                modal.detach();
                modal.remove();
            });
            $modal.modal(options);
            return $modal;
        };
        return newModal(title, options);
    };
});





