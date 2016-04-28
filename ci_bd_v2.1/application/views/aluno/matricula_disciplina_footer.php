<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui-1.11.4.custom/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui-1.11.4.custom/datepicker-pt-BR.js') ?>"></script>
    
    
    <!--Javascript do Formulario -->
    <script src="<?php echo base_url('assets/js/disciplina_cadastro.js') ?>"></script>
    
    <!-- Script q faz o datepicker funcionar -->
    <script >
                $('#dp_nasc').datepicker({
                    inline: true,
                    changeMonth: true,
                    changeYear: true
                });
                $('#dp_ident').datepicker({
                    inline: true,
                    changeMonth: true,
                    changeYear: true
                });
    </script>

    
            
    
  </body>
</html>