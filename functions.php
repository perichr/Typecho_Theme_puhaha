<?php
function themeConfig($form) {

}

function PHH_IsPluginActived($pluginname){
    return class_exists("$pluginname_Plugin");
}
