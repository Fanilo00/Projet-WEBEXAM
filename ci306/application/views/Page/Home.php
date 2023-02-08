
<?php for($i=0;$i<count($Objets);$i++) { ?>

    <div class=" content col-sm-2">
        <div class="card">
            <div class="image">
                
            <img src="<?php echo base_url();?>Assets/Images/<?php echo $Objets[$i]['Photo'];?>"/>
            </div>
            <div class="card-inner">
                <div class="header">
                    <p class="p1"><?php echo $Objets[$i]['Descri'];?></p>
                    <p class="p2"><?php echo $Objets[$i]['Prix_estimatif'];?></p>
                </div>
            </div>
        </div>
    </div>
  
<?php } ?>
