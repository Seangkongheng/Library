  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

<script>

 $(document).ready(function () {
    $('#bookData').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch title book... ",
      }
    });
});

</script>

<script>

 $(document).ready(function () {
    $('#catagoryData').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch title book... ",
      }
    });
});
</script>

<script>

 $(document).ready(function () {
    $('#adminbook').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch title book... ",
      }
    });
});
</script>



<script>

 $(document).ready(function () {
    $('#memberData').DataTable({
      "pagdingType":"Full_numbers",
      "lengthMenu":[
        [10,25,50,-1],
        [10,25,50,"All"],
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"serch title book... ",
      }
    });
});
</script>