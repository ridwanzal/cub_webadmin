</div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="../../lib/jquery/dist/jquery-1.11.1.min.js"></script>
<script src="../js/module_insert.js"></script>
<script src="../../lib/bootstrap/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="path-to/jquery-1.10.2.min.js"></script>
<!-- Jquery DataTables -->
<!-- <script type="text/javascript" language="javascript" src="../../lib/DataTables-1.10.18/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" language="javascript" src="../../lib/DataTables-1.10.18/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#_tbl').DataTable({
            "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>