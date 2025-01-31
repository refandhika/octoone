<?php
    $items = $this->getList();

    $output = sprintf($settings['before_menu'], $this->id, $this->name, $this->id_attrib, $this->class_attrib, $this->short_desc);

    foreach ($items as $item) {
        if($item->menu_id == $this->id){
            $output .= $item->render($controller, $settings, 0, $item->getUrl(), $item->children ? count($item->children) : 0);
        }
    }

    $output .= sprintf($settings['after_menu'], $this->id, $this->name, $this->id_attrib, $this->class_attrib, $this->short_desc);

    return $output;