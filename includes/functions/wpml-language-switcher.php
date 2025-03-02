<?php
function custom_wpml_lang_switcher($class)
{
    if (function_exists('icl_get_languages')) {
        // remove WPML default css
        if (!defined('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS')) {
            define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
        }
?>
        <div class="language-switcher <?php echo $class; ?>">
            <?php
            $languages = icl_get_languages('skip_missing=N&orderby=code&order=DESC&link_empty_to=str');
            foreach ($languages as $language) {
                //$flag = $language['country_flag_url'];
                $url =  $language['url'];
                $isActive = $language['active'];
                $name = $language['native_name'];
                $language_code = $language['language_code'];
            ?>
                <span class="language<?php if ($isActive == 1) { ?> active-language<?php } ?>">
                    <a href="<?php echo $url; ?>" class="language-link" data-lang="<?php echo $language_code; ?>">
                        <?php echo strtoupper($language_code); ?>
                    </a>
                </span>
            <?php } ?>
        </div>
<?php
    }
}
