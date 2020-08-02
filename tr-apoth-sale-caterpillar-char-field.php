<?php
/*
  @package tapRoot_apothecary
  =========================================
    SALE CATERPILLAR  CHAR FIELD TEMPLATE
  =========================================
*/


$current_char = get_option('tr-apoth-sale-caterpillar-char-setting');

?>
<input type="text" id="tr-apoth-sale-caterpillar-char-setting" name="tr-apoth-sale-caterpillar-char-setting" value="<?php echo esc_html($current_char); ?>" placeholder="Select Character...">

<div class="character-select-container">

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="rat" name="rat" value="rat" <?php echo ($current_char == 'rat' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar rat"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="pigeon" name="pigeon" value="pigeon" <?php echo ($current_char == 'pigeon' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar pigeon"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="whale" name="whale" value="whale" <?php echo ($current_char == 'whale' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar whale"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="butterfly" name="butterfly" value="butterfly" <?php echo ($current_char == 'butterfly' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar butterfly"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="bunny" name="bunny" value="bunny" <?php echo ($current_char == 'bunny' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar bunny"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="chicken" name="chicken" value="chicken" <?php echo ($current_char == 'chicken' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar chicken"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="beaver" name="beaver" value="beaver" <?php echo ($current_char == 'beaver' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar beaver"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="cat" name="cat" value="cat" <?php echo ($current_char == 'cat' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar cat"></span>
    </div>
  </div>

  <div class="character-select-item">
    <input type="checkbox" class="sale-caterpillar-checkbox" id="lobster" name="lobster" value="lobster" <?php echo ($current_char == 'lobster' ? 'checked' : '') ?>>
    <div class="sale-caterpillar-admin-contianer">
      <span class="sale-caterpillar lobster"></span>
    </div>
  </div>

</div>
