<?php

?>

<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>


<div class="container mt-5 mb-5 flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-lg-6 mt-4 mb-4">
            <div class="contacts pt-3 pb-3">
                <h2 class="text-center mb-4">You can find us here:</h2>
                <h5 class="text-center mb-4">Address: Krišjāņa Barona iela 1, Rīga, LV-1050</h5>
                <h5 class="text-center mb-4">Phone: +0000 0000 0000</h5>
                <h5 class="text-center mb-4">Email: email@email.com</h5>
            </div>
        </div>
        <div class="col-lg-6">
            <gmp-map center=" 56.94969177246094,24.117568969726562" zoom="14" map-id="DEMO_MAP_ID">
                <gmp-advanced-marker position="56.94969177246094,24.117568969726562" title="My location"></gmp-advanced-marker>
            </gmp-map>
        </div>
    </div>
</div>
</div>


<?php include('Templates/footer.php') ?>





<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr3vQIlM2AkdJF872dw2qvV2icE20Rn8M&callback=console.debug&libraries=maps,marker&v=beta">
</script>

</body>

</html>