import 'admin-lte/plugins/jquery/jquery.js';
import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js';
import 'admin-lte/plugins/sweetalert2/sweetalert2.min.js';
import 'admin-lte/plugins/toastr/toastr.min.js';
import 'admin-lte/plugins/datatables/jquery.dataTables.min.js';
import 'admin-lte/plugins/datatables/jquery.dataTables.min.js';
import 'admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';
import 'admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js';
import 'admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';
import 'admin-lte/dist/js/adminlte.min.js';
import 'admin-lte/plugins/select2/js/select2.full.min';
import 'bootstrap-fileinput/js/fileinput.min';
import 'bootstrap-fileinput/js/locales/tr';
import 'bootstrap-fileinput/themes/explorer-fa4/theme.min.js';
import SwAlert from 'admin-lte/plugins/sweetalert2/sweetalert2.all.js';
import toastr from 'toastr/toastr.js';
import flatpickr from "flatpickr/dist/flatpickr";

import DecoupledEditor from '@ckeditor/ckeditor5-build-decoupled-document/build/ckeditor';

// ref: https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#document-ready

var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}

window.$ = window.jQuery = require('jquery');
window.Swal = SwAlert;
window.toastr = toastr;
ready(() => {
    $('select').select2();
    $('.tooltip_title').tooltip()
    $(".bs-custom-image-upload").fileinput({
        theme: "explorer-fa4",
        language: 'tr',
        showCancel: false,
        showUpload: false,
        allowedFileExtensions: ["jpg", "png", "jpeg"],
        browseClass: "btn btn-info "
    });
});
