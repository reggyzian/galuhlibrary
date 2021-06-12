
<script src="src/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#transactions').DataTable();
        $('#books').DataTable();
        $('#writers').DataTable();
        $('#publishers').DataTable();
        $('#users').DataTable();
        $('#categories').DataTable();
    });
    $(document).ready(function() {
        $('#user_id').select2();
        $('#book_id').select2();
        $('#writer_id').select2();
        $('#category_id').select2();
        $('#publisher_id').select2();
    });
</script>

</body>
</html>