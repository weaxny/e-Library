<div class="card me-5 mt-5 h-25" style="width: 18rem;">
  <div class="card-header bg-success text-white fw-bold">
    Kategoriler
  </div>
  <ul class="list-group list-group-flush">

    <?php for($i = 0; $i < count($categories); $i++): ?>
    <li style="cursor: pointer;" class="list-group-item <?php echo ($categories[$i]['active']) ? 'bg-success bg-opacity-10' : '' ?>"><?php echo $categories[$i]["category_name"]?></li>
    <?php endfor ?>
  </ul>
</div>