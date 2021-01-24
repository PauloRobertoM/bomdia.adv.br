<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Parceiros {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'parceiros_register_meta_boxes'));
   }

   public function init() {
      $this->parceiros_post_type();
   }

   public function parceiros_post_type() {

      $labels = array(
         'name'                => _x( 'Parceiros', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Parceiro', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Parceiros', 'text_domain' ),
         'name_admin_bar'      => __( 'Parceiros', 'text_domain' ),
         'parent_item_colon'   => __( 'Parceiro pai:', 'text_domain' ),
         'all_items'           => __( 'Todas os parceiros', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo parceiro', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo parceiro', 'text_domain' ),
         'edit_item'           => __( 'Ediar parceiro', 'text_domain' ),
         'update_item'         => __( 'Atualizar parceiro', 'text_domain' ),
         'view_item'           => __( 'Ver parceiro', 'text_domain' ),
         'search_items'        => __( 'Procurar parceiro', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'parceiros', 'text_domain' ),
         'description'         => __( 'Cadastro de parceiros', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
         'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
      );
      register_post_type( 'parceiros', $args );
   }

   public function parceiros_register_meta_boxes( $meta_boxes ) {
      $prefix = 'parceiros_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}link",
         'title'      => 'Link',
         'post_types' => array( 'parceiros' ),
         'context'    => 'advanced',
         'priority'   => 'default',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}link",
               'type' => 'text',
               'name' => null,
               'desc' => 'Adicionar Link',
            ),
         ),
      );
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto do parceiro',
         'post_types' => array( 'parceiros' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}foto",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar foto',
               'max_file_uploads' => 1,
            ),
         )
      );
      
      return $meta_boxes;
   }
}