                     
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>/public/admin/js/scripts.js"></script>
         <script src="//cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
         <script>
            $(document).ready(function(){
                CKEDITOR.replace('content');
                // CKEDITOR.replace('category_desc');
            });
        </script>
        <script
        
        src="https://code.jquery.com/jquery-2.0.3.js"
        integrity="sha256-lCf+LfUffUxr81+W0ZFpcU0LQyuZ3Bj0F2DQNCxTgSI="
        crossorigin="anonymous"></script>        
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>