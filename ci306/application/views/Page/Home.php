
<?php for($i=0;$i<count($Objets);$i++) { ?>
<p>Categorie: <?php echo $Objets[$i]['Categorie'];?> </p>
</br>
    <div class="col-sm-2">
  <div class="card">
    <div class="image">
      <img src="<?php echo base_url();?>Assets/Images/<?php echo $Objets[$i]['Photo'];?>"/>
    </div>
    <div class="card-inner">
      <div class="header">
        <h2><?php echo $Objets[$i]['Descri'];?></h2>
        <h3><?php echo $Objets[$i]['Prix_estimatif'];?></h3>
    </div>
    <div class="content">
      <p><?php echo $Objets[$i]['Categorie'];?></p>
    </div>
      </div>
  </div>
</div>
<?php } ?>