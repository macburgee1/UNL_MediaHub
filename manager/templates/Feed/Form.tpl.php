<form action="<?php echo $this->action; ?>" method="post" name="feed" id="feed">
    <div style="display: none;">
    <input type="hidden" id="__unlmy_posttarget" name="__unlmy_posttarget" value="feed" />
    <?php
        if (isset($this->feed->id)) {
            echo '<input type="hidden" id="id" name="id" value="'.$this->feed->id.'" />';
        }
    ?>
    </div>

    <fieldset id="feed_header">

        <legend><?php echo (isset($this->feed))?'Edit':'Create'; ?> Feed</legend>
        <ol>
            <li><label for="title" class="element">Title</label><div class="element"><input id="title" name="title" type="text" value="<?php echo $this->feed->title; ?>" size="55" /></div></li>
            <li><label for="description" class="element">Description</label><div class="element"><textarea id="description" name="description" rows="5" cols="50"><?php echo $this->feed->title; ?></textarea></div></li>
            <li><label for="submit" class="element">&nbsp;</label><div class="element"><input id="submit" name="submit" value="Save" type="submit" /></div></li>
        </ol>
    </fieldset>
    
    <fieldset id="itunes_header">

        <legend>iTunes Options</legend>
        <ol>
            <?php
            $itunes = new UNL_MediaYak_Feed_NamespacedElements_itunes();
            foreach ($itunes->getChannelElements() as $element) {
                $value = '';
                $label = ucwords($element);
                echo "<li><label for='itunes_$element' class='element'>$label</label><div class='element'><input id='itunes_$element' name='itunes[$element]' type='text' value='$value' size='55' /></div></li>"; 
            }
            ?>
            <li><label for="itunes_submit" class="element">&nbsp;</label><div class="element"><input id="itunes_submit" name="submit" value="Save" type="submit" /></div></li>
        </ol>
    </fieldset>

</form>