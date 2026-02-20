<?php include "config/db.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Supplier Form</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body class="bg-light">
        <div class="container mt-4">
            <!-- <h4 class="text-center mb-4">Supplier Form</h4> -->

            <form id="supplierForm">
                <div class="row">
                    <!--Left Column-->
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label>Supplier Code *</label>
                            <input type="text" name="supplier_code" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label>Address 1</label>
                            <input type="text" name="address1" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Address 2</label>
                            <input type="text" name="address2" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Address 3</label>
                            <input type="text" name="address3" class="form-control">
                        </div>
                        
                        <div class="mb-2">
                            <label>Country *</label>
                            <select name="country" class="form-select" required>
                                <option value="">Select One</option>
                                <option value="1">Sri Lanka</option>
                                <option value="2">England</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label>Website</label>
                            <input type="text" name="website" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>VAT Reg No</label>
                            <input type="text" name="vat_reg_no" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Currency *</label>
                            <select name="currency" class="form-select" required>
                                <option value="">Select One</option>
                                <option value="1">LKR</option>
                                <option value="2">USD</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label>Pay Mode *</label>
                            <select name="country" class="form-select" required>
                                <option value="">Select One</option>
                                <option value="1">Cash</option>
                                <option value="2">Cheque</option>
                            </select>
                        </div>

                        <div class="form-check mt-2">
                            <input type="form-check-input" type="checkbox" name="is_active" value="1" checked>
                            <label class="form-check-label text-danger">
                                Inactive Supplier
                            </label>
                        </div>
                    </div>

                    <!-- Right Column -->
                     <div class="col-md-6">
                        <div class="mb-2">
                            <label>Supplier Name *</label>
                            <input type="text" name="supplier_name" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label>Contact Person</label>
                            <input type="text" name="contact_person" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Mobile No</label>
                            <input type="text" name="mobile_no" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Fax</label>
                            <input type="text" name="fax" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>SVAT Reg No</label>
                            <input type="text" name="svat_reg_no" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Origin *</label>
                            <select name="origin" class="form-select" required>
                                <option value="">Select One</option>
                                <option value="Local">Local</option>
                                <option value="Foreign">Foreing</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label>Pay Term</label>
                            <select name="pay_term" class="form-select">
                                <option value="">Select One</option>
                                <option value="30 Days">30 Days</option>
                                <option value="60 Days">60 Days</option>
                            </select>
                        </div>
                     </div>
                </div>

                <div class="text-center mt-4">
                    <button type="reset" class="btn btn-secondary">New</button>
                    <button type="submmit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-info">Back</button>
                </div>
            </form>

            <div id="message" class="mt-3 text-center"></div>
        </div>

        <script src="ajax.js"></script>

    </body>
</html>