
<section class="general-section justify-content-center">
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="search-wrap">
                <div class="container">
                    <h4>Look for a specific student via this search bar</h4>
                    <form action="" method="onsubmit" class="search-form">
                        <button type="submit" value="search" id="searchButton">search</button>
                        <input type="text" class="search">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center padding">
        <div class="table-responsive">
            <table>
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Student ID</th>
                    <th data-sortable="true" scope="col" data-field="Class">First name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Last name</th>
                    <th data-sortable="true" scope="col" data-field="Class">E-mail address</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class ID</th>
                </tr>
                </thead>
                <tr>
                    <td><?php echo $student['studentID'];?></td>
                    <td><?php echo $student['firstName']; ?></td>
                    <td><?php echo $student['lastName']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['className']; ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row justify-content-center padding">
        <form method="post" action="#">
            <div class="form-group row">
                <label for="firstName" class="col-sm-2 col-form-label">firstName</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" value="<?php echo $student['firstName'];?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-sm-2 col-form-label">lastName</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName" value="<?php echo $student['lastName'];?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" value="<?php echo $student['email'];?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="className" class="col-sm-2 col-form-label">className</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="className" value="<?php echo $student['className'];?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="save" class="btn btn-primary">Save student</button>
                </div>
            </div>
        </form>
        </div>
</section>



