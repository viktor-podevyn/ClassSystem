
<section class="general-section justify-content-center">

    <!--<h4>Welcome to the general  page </h4>-->
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
            <table class="table table-hover" data-toggle="table">
                <thead>
                <tr class="justify-content-center">
                    <th data-sortable="true" scope="col" data-field="Name">Name</th>
                    <th data-sortable="true" scope="col" data-field="Class">Class</th>
                </tr>
                </thead>
                <tbody>
                <tr class="clickable" data-href="#">
                    <td>
                        <a class="nav-link" href="detail-view.php">Alexandra Banica</a>
                    </td>
                    <td>
                        Lamarr 4-27
                    </td>
                    <tr>
                    <td>
                        Viktor Podevyn
                    </td>
                    <td>
                        Lamarr 4-27
                    </td>
                </tr>
                <tr>
                    <td>
                        Mark Hoogkamer
                    </td>
                    <td>
                        Lamarr 4-27
                        <div class="table-data">
                <a href="homepage.php" class="btn btn-primary">Edit</a>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $student['id']?>" />
                            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                        </form>
                        </div>
                    </td>
                </tbody>
            </table>
            <form class="create-form" method="post">
                <input type="hidden" name="id" value="<?php echo $student['id']?>" />
                <a href="homepage.php" class="btn btn-primary" type="submit" name="create" value="Create new">Create new</a>
            </form>
            <form class="export-form" method="post">
                <input class="btn export-button" type="submit" name="export" value="Export to CSV">
            </form>
        </div>
    </div>
</section>


