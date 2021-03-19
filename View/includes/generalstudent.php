<section class="general-section justify-content-center">

    <!--<h4>Welcome to the general  page </h4>-->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="search-wrap">
                <div class="container">
                    <h4>Look for a specific student via this search bar</h4>
                    <form action="Model/search.php" method="post" class="search-form">
                        <button type="submit" name="submit" value="search" id="searchButton">search</button>
                        <input type="text" class="search" name="search" value="" id="keyword" maxlength='25'>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center padding">
        <div class="table-responsive">
            <table class="table table-hover" data-toggle="table">
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($students as $student):?>
                    <tr class="clickable" data-href="#">
                        <td>
                            <div class="table-data">
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $student['studentID'];?>"/>
                                    <button type="submit" name="view" value="detail-view"><?php echo $student['name'];?></button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <?php echo $student['className']; ?>
                        </td>
                        <td>
                            <div class="table-data">
                                <form method="post">
                                    <input type="submit" name="view" value="edit" class="btn btn-primary">
                                    <input type="hidden" name="id" value="<?php echo $student['studentID']; ?>"/>
                                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <form class="create-form" method="post">
                <input type="hidden" name="id" value="<?php echo $student['studentID']; ?>"/>
                <a href="View/create.php" class="btn btn-primary" type="submit" name="create"
                   value="<?php echo $student['studentID']; ?>">Create
                    new</a>
            </form>

            <form class="export-form" method="post" name="studentcsv" action="Model/csv.php">
                <input class="btn export-button" type="submit" name="studentcsv" value="Export to CSV" />
            </form>

        </div>
    </div>
</section>

