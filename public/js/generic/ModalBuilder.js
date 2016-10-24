/**
 * Created by Alex on 10/24/2016.
 */

/**
 * Created by Tibor on 10/14/2016.
 */

var Generic = Generic || {};

(function(){
    var allModals = [];
    var addModal = function(modal){
        modal = modal.get(0);
        allModals.push(modal);
    };

    var removeModal = function(modal){
        var i;
        modal = modal.get(0);
        for(i = 0; i < allModals.length; i++) {
            if (allModals[i] == modal) {
                allModals.splice(i, 1);
                i--;
            }
        }
        if ($(allModals).parent('body').length > 0) {
            $('body').addClass('modal-open');
        }
    };

    Generic.ModalBuilder = function(){

        var newModal = function(title, options){
            options = $.extend({
                show: false,
                backdrop: 'static'
            }, options);

            if (!title) {
                title = '';
            }
            var $modal =  $(
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
            $modal.on('shown.bs.modal', function(){
                var $mod = $modal.find('.modal-footer .btn-primary');
                $mod.focus();
            });
            $modal.on('hidden.bs.modal', function(){
                $modal.detach();
                removeModal($modal);
            });
            $modal.modal(options);
            $modal.on('show.bs.modal', function(){
                addModal($modal);
            });
            return $modal;
        };

        this.getModal = function(title, options){
            return newModal(title, options);
        };
    };
})();
