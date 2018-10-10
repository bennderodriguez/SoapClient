<?php include './headers.php'; ?>
<!-- Sign up form -->

<!-- Sign up card -->
<div class="card person-card">
    <div class="card-body">
        <!-- Sex image -->
        <img id="img_sex" class="person-img"
             src="https://visualpharm.com/assets/725/Add%20Shopping%20Cart-595b40b65ba036ed117d36f4.svg" width="70%">
        <h4 id="who_message" class="card-title">Buy here!</h4>
        <!-- First row (on medium screen) -->
    </div>
</div>
<form role="form" id="contactForm" data-toggle="validator" class="shake">
    <div class="grid-stack">
        <div class="grid-stack-item"
             data-gs-x="0" data-gs-y="0"
             data-gs-width="6" data-gs-height="12">
            <div class="grid-stack-item-content">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Business Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Kunnr" class="col-form-label">Kunnr</label>
                            <input type="text" class="form-control form-control-sm" id="Kunnr"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Name1" class="col-form-label">Name1</label>
                            <input type="text" class="form-control form-control-sm" id="Name1"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Stcd1" class="col-form-label">Stcd1</label>
                            <input type="text" class="form-control form-control-sm" id="Stcd1"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Ort02" class="col-form-label">Ort02</label>
                            <input type="text" class="form-control form-control-sm" id="Ort02"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Stras" class="col-form-label">Stras</label>
                            <input type="text" class="form-control form-control-sm" id="Stras"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Mcod3" class="col-form-label">Mcod3</label>
                            <input type="text" class="form-control form-control-sm" id="Mcod3"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Regio" class="col-form-label">Regio</label>
                            <input type="text" class="form-control form-control-sm" id="Regio"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Land1" class="col-form-label">Land1</label>
                            <input type="text" class="form-control form-control-sm" id="Land1"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Pstlz" class="col-form-label">Pstlz</label>
                            <input type="text" class="form-control form-control-sm" id="Pstlz"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Telf1" class="col-form-label">Telf1</label>
                            <input type="text" class="form-control form-control-sm" id="Telf1"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Erdat" class="col-form-label">Erdat</label>
                            <input type="text" class="form-control form-control-sm" id="Erdat"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Altkn" class="col-form-label">Altkn</label>
                            <input type="text" class="form-control form-control-sm" id="Altkn"  required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-stack-item"
             data-gs-x="6" data-gs-y="0"
             data-gs-width="6" data-gs-height="12">
            <div class="grid-stack-item-content">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Item Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Maktx" class="col-form-label">Maktx</label>
                            <input type="text" class="form-control form-control-sm" id="Maktx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Matnr" class="col-form-label">Matnr</label>
                            <input type="text" class="form-control form-control-sm" id="Matnr" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Matkl" class="col-form-label">Matkl</label>
                            <input type="text" class="form-control form-control-sm" id="Matkl" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Meins" class="col-form-label">Meins</label>
                            <input type="text" class="form-control form-control-sm" id="Meins" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Mtart" class="col-form-label">Mtart</label>
                            <input type="text" class="form-control form-control-sm" id="Mtart" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Maktg" class="col-form-label">Maktg</label>
                            <input type="text" class="form-control form-control-sm" id="Maktg" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Knumh" class="col-form-label">Knumh</label>
                            <input type="text" class="form-control form-control-sm" id="Knumh" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Kbetr" class="col-form-label">Kbetr</label>
                            <input type="text" class="form-control form-control-sm" id="Kbetr" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Konwa" class="col-form-label">Konwa</label>
                            <input type="text" class="form-control form-control-sm" id="Konwa" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Kdmat" class="col-form-label">Kdmat</label>
                            <input type="text" class="form-control form-control-sm" id="Kdmat" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label for="Vkbur" class="col-form-label">Vkbur</label>
                            <input type="text" class="form-control form-control-sm" id="Vkbur" placeholder="Enter xxx" required value="1">
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 1em;">
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
        <button type="submit" id="form-submit" class="btn btn-primary btn-lg btn-block">Sign up !</button>
    </div>
</form>

<?php include './footer.php'; ?>

