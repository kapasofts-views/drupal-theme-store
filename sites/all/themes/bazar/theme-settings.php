<?php

/**
 *@file
 *Theme setting callbacks for the Bazar Theme
 */

/**
 * Implements hook_form_FORM_ID_alter()
 */

function bazar_form_system_theme_settings_alter(&$form, &$form_state){
    //dpm($form);
    $form['bazar_background'] = array(
        '#type' => 'textfield',
        '#title' => t('Background-Color'),
        '#default_value' => theme_get_setting('bazar_background'),
        '#description' => t('Displays the bazar theme background color'),
        '#weight' => -2,
    );

}