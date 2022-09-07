</div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('assets')}}/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap4-editable/js/bootstrap-editable.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap4-editable/js/ace.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap4-editable/js/ace-extra.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap4-editable/js/ace-elements.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap4-editable/js/ace-editable.js"></script>


<script src="{{ asset('assets')}}/admin/vendor/bootstrap-table/bootstrap-table.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-table/extensions/editable/bootstrap-table-editable.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-table/extensions/group-by-v2/bootstrap-table-group-by.min.js"></script>
<!-- Vendor JS       -->
<script src="{{ asset('assets')}}/admin/vendor/slick/slick.min.js">
</script>
<script src="{{ asset('assets')}}/admin/vendor/wow/wow.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/animsition/animsition.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{ asset('assets')}}/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{ asset('assets')}}/admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/select2/select2.min.js">
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
<!-- Main JS-->
<script src="{{ asset('assets')}}/admin/js/main.js"></script>
@yield('javascript')
</body>
