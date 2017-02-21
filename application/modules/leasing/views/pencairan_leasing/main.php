<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Pencairan Leasing</div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <section class="panel default blue_title h2">

                        <div class="panel-body">

                            <div id="accordion" class="panel-group  accordion accordion-color">

                                <?php
                                $no = 0;
                                foreach ($mleasing as $leasing) {
                                    $no++;
                                    echo '<div class="panel panel-default">
                                    <div class="panel-heading blue">
                                        <h4 class="panel-title ">
                                            <a href="#collapse' . $no . '" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                ' . $leasing->leasing . '
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="collapse' . $no . '" style="height: auto;">
                                        <div class="panel-body">
                                            Content
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-1 pull-left text-left">	

    </div>
</form>
<div class="col-lg-11 pull-right text-right">	

</div>
</div>
<script>
    $(document).ready(function () {

    });
</script>