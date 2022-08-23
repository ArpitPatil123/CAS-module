<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
        body{
            background-color: rgba(71, 35, 217, 0.4);
        }
    </style>
</head>

<body>
    <?php foreach ($view->result() as $row) : ?>
        <div class="container pb-4">
            <div class="container mt-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
                    <a class="btn btn-danger me-md-2" type="button" href="<?= base_url('formcontroller/dto'); ?>">Back</a>
                </div>
            </div>

            <div class="container bg-white" style="margin-top:50px;padding: 20px;border-radius: 10px;border: 1px solid #000;">
                <h2> Personal Details </h2>
                <hr>
                <div class="row">
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Name</h5>
                            <h7><?= $row->Firstname ?> <?= $row->Middlename ?> <?= $row->Surname ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Email</h5>
                            <h7><?= $row->Email ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Phone No.</h5>
                            <h7><?= $row->Phone ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Designation</h5>
                            <h7><?= $row->Designation ?></h7>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>DOB</h5>
                            <h7><?= $row->DOB ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Age</h5>
                            <h7><?= $row->Age ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Gender</h5>
                            <h7><?= $row->Gender ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>DOJ</h5>
                            <h7><?= $row->DOJ ?></h7>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Sevarth Id</h5>
                            <h7><?= $row->EmployeeCode ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Branch</h5>
                            <h7><?= $row->Branch ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="d-flex flex-column">
                            <h5>Address</h5>
                            <h7><?= $row->Address ?></h7>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>State</h5>
                            <h7><?= $row->State ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>City</h5>
                            <h7><?= $row->City ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Taluka</h5>
                            <h7><?= $row->Taluka ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Pincode</h5>
                            <h7><?= $row->Pincode ?> </h7>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bg-white" style="margin-top:100px;padding: 20px;border-radius: 10px;border: 1px solid #000;">
                <h2> Professional Details </h2>
                <hr>
                <div class="row">
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>Date Of Probession</h5>
                            <h7><?= $row->Probession ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5>GR No.</h5>
                            <h7><?= $row->GRNo ?></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5></h5>
                            <h7></h7>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="d-flex flex-column">
                            <h5></h5>
                            <h7></h7>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container bg-white" style="margin-top:100px;padding: 20px;border-radius: 10px;border: 1px solid #000;">
                <h2> Previous Service Details </h2>
                <hr>
                <?php $strInsName = $row->InstituteName; ?>
                <?php $arrInsName = explode(',', $strInsName); ?>

                <?php $strServiceStartDate = $row->ServiceStartDate; ?>
                <?php $arrServiceStartDate = explode(',', $strServiceStartDate); ?>

                <?php $strServiceEndDate = $row->ServiceEndDate; ?>
                <?php $arrServiceEndDate = explode(',', $strServiceEndDate); ?>

                <?php $count = count($arrInsName); ?>
                <table class="table table-striped">
                    <thead style="background-color: #5f27cd;">
                        <tr>
                            <th scope="col" class="text-white" style="width: 75px;">Sr No.</th>
                            <th scope="col" class="text-white">Institute Name</th>
                            <th scope="col" class="text-white">Service Start Date</th>
                            <th scope="col" class="text-white">Service End Date</th>
                            <th scope="col" class="text-white">Proof</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < $count; $i++) : ?>
                            <tr>
                                <th scope="row"><?= $i + 1 ?></th>
                                <td><?= $arrInsName[$i]; ?></td>
                                <td><?= $arrServiceStartDate[$i]; ?></td>
                                <td><?= $arrServiceEndDate[$i]; ?></td>
                                <td><?= $arrInsName[$i]; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <div class="container bg-white" style="margin-top:100px;padding: 20px;border-radius: 10px;border: 1px solid #000;">
                <h2> Training Details </h2>
                <hr>
                <?php $strTrainingName = $row->TrainingName; ?>
                <?php $arrTrainingName = explode(',', $strTrainingName); ?>

                <?php $strSponsoredBy = $row->SponsoredBy; ?>
                <?php $arrSponsoredBy = explode(',', $strSponsoredBy); ?>

                <?php $strType = $row->Type; ?>
                <?php $arrType = explode(',', $strType); ?>

                <?php $strDuration = $row->Duration; ?>
                <?php $arrDuration = explode(',', $strDuration); ?>

                <?php $strStartDate = $row->StartDate; ?>
                <?php $arrStartDate = explode(',', $strStartDate); ?>

                <?php $strEndDate = $row->EndDate; ?>
                <?php $arrEndDate = explode(',', $strEndDate); ?>

                <?php $count1 = count($arrTrainingName); ?>
                <table class="table table-striped">
                    <thead style="background-color: #5f27cd;">
                        <tr>
                            <th scope="col" class="text-white" style="width: 75px;">Sr No.</th>
                            <th scope="col" class="text-white">Training Name</th>
                            <th scope="col" class="text-white">Sponsored By</th>
                            <th scope="col" class="text-white">Type</th>
                            <th scope="col" class="text-white">Duration</th>
                            <th scope="col" class="text-white">Start Date</th>
                            <th scope="col" class="text-white">End Date</th>
                            <th scope="col" class="text-white">Proof</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < $count1; $i++) : ?>
                            <tr>
                                <th scope="row"><?= $i + 1 ?></th>
                                <td><?= $arrTrainingName[$i]; ?></td>
                                <td><?= $arrSponsoredBy[$i]; ?></td>
                                <td><?= $arrType[$i]; ?></td>
                                <td><?= $arrDuration[$i]; ?></td>
                                <td><?= $arrStartDate[$i]; ?></td>
                                <td><?= $arrEndDate[$i]; ?></td>
                                <td><?= "Proof"; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <div class="container bg-white" style="margin-top:100px;padding: 20px;border-radius: 10px;border: 1px solid #000;">
                <h2> CR Details </h2>
                <hr>
                <?php $strCRStartDate = $row->CRStartDate; ?>
                <?php $arrCRStartDate = explode(',', $strCRStartDate); ?>

                <?php $strCREndDate = $row->CREndDate; ?>
                <?php $arrCREndDate = explode(',', $strCREndDate); ?>

                <?php $strGrade = $row->Grade; ?>
                <?php $arrGrade = explode(',', $strGrade); ?>

                <?php $count2 = count($arrGrade); ?>
                <table class="table table-striped">
                    <thead style="background-color: #5f27cd;">
                        <tr>
                            <th scope="col" class="text-white" style="width: 75px;">Sr No.</th>
                            <th scope="col" class="text-white">CR Start Date</th>
                            <th scope="col" class="text-white">CR End Date</th>
                            <th scope="col" class="text-white">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < $count2; $i++) : ?>
                            <tr>
                                <th scope="row"><?= $i + 1 ?></th>
                                <td><?= $arrCRStartDate[$i]; ?></td>
                                <td><?= $arrCREndDate[$i]; ?></td>
                                <td><?= $arrGrade[$i]; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

            <div class="container mt-4 d-grid gap-2 d-md-flex justify-content-center mb-4">
                <?php if ($row->status == '1') : ?>
                    <a class="btn btn-success" style="width:125px;" type="button" href="<?= base_url('formcontroller/updatedto/' . $row->Id . '/' . $row->Email); ?>">Approve</a>
                    <input type="button" class="btn btn-danger" style="width:125px;" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Reject"/>
                <?php elseif ($row->status == '5') : ?>
                    <a class="btn btn-danger" style="width:125px;" type="button" href="#">Rejected</a>
                <?php else : ?>
                    <a class="btn btn-success" style="width:125px;" type="button" href="<?= base_url(); ?>">Approved</a>
                    <a class="btn btn-danger" style="width:125px;" type="button" href="<?= base_url('formcontroller/revertDto/' . $row->Id) ?>">Revert</a>
                <?php endif ?>
            </div>

            <!-- Button trigger modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <?= form_open('formcontroller/dtoreject/'.$row->Id);?>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reject Reason</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <label for="message" class="form-group">Message</label>
                            <input type="text" class="form-control" name="message">
                        </div>

                        <div class="modal-footer">
                            <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close"></input>
                            <input type="submit" class="btn btn-danger" value="Reject"></input>
                        </div>
                    <?= form_close();?>
                    </div>
                </div>
            </div>
            
        </div>
    <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>