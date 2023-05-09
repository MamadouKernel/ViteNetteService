<!-- Footer Start -->
<div class = "container-fluid pt-4 px-4">
    <div class = "bg-secondary rounded-top p-4">
        <div class = "row">
            <div class = "col-12 col-sm-6 text-center text-sm-start">
                &copy;
                <a href = "accueil">ViteNetteService</a>, All Right Reserved.
            </div>
            <div class = "col-12 col-sm-6 text-center text-sm-end">
                <!--/* * * This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ** */ -->
                Designed By <a href = "#">Kernel_KM</a>
                <br>Distribué par: <a href = "#" target = "_blank">i-yelen</a>
            </div>
        </div>
    </div>
</div
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/lib/chart/chart.min.js"></script>
<script src="/public/package/dist/sweetalert2.all.js"></script>
<script src="/public/package/dist/sweetalert2.js"></script>
<script src="/public/lib/easing/easing.min.js"></script>
<script src="/public/lib/waypoints/waypoints.min.js"></script>
<script src="/public/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/public/lib/tempusdominus/js/moment.min.js"></script>
<script src="/public/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="/public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!-- Template Javascript -->
<script src="/public/js/main.js"></script>
<script>
    function zoom_i(img_preuve, title, montant, date, pn, iden){
        Swal.fire({
            title: title,
            html: "A la date du <b style='color:red'>"+date+"</b>, Mr,Mme ou Mlle <b style='color:red'>"+pn+"</b> qui a pour l'identifiant de carte <b style='color:red'>"+iden+"</b> a fait un réchargement de <b style='color:red'>"+montant+"</b>",
            imageUrl: img_preuve,
            imageWidth: 300,
            imageHeight: 300,
            imageAlt: 'Custom image',
        })
    }
    $(document).ready(function () {
        $('table.table-bordered').DataTable( {
            "language": {
                //"url": "dataTables.german.lang"
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/fr-FR.json" }
        } );
    });
</script>
</body>

</html>