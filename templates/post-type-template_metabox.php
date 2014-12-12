<input type="hidden" name="post_id" id="post_id" value="<?php echo $post_id = get_the_ID(); ?>" />
<form name="set_from" id="set_from" >
<table>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Text field</label>
        </th>
        <td>
            <input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Multiselect field</label>
        </th>
        <td>
            <input type="text" id="meta_b" name="meta_b" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" />
            <!--<select name="meta_b[]" id="meta_b" multiple>
                <option value="one">one</option>
                <option value="two">two</option>
                <option value="three">three</option>
                <option value="four">four</option>
                <option value="five">five</option>
            </select>
            --><?php /*echo @get_post_meta($post->ID, 'meta_b', true);*/?>
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Upload img</label>
        </th>
        <td>
            <input type="text" id="meta_c" name="meta_c" value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />
            <!--<input type="file" name="meta_c" id="meta_c"  multiple="false" />
            --><?php /* $attachment_id = media_handle_upload( 'meta_c', $_POST['post_id'] );
            if ( !is_wp_error( $attachment_id ) ) {
            echo "Ошибка загрузки медиафайла.";
            } else {
            echo "Медиафайл был успешно загружен!";
            }
            */?>
        </td>
    </tr>
    <tr valign="top">
        <td>
            <input type="button" id="btn" value="Отправить" />
        </td>
    </tr>
</table>
