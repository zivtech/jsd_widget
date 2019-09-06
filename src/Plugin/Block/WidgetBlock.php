<?php

namespace Drupal\jsd_widget\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a Jira Service Desk Widget Block.
 *
 * @Block(
 *   id = "jsd_widget_block",
 *   admin_label = @Translation("Jira Service Desk Widget block"),
 *   category = @Translation("Jira Service Desk Widget"),
 * )
 */
class WidgetBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $config = $this->getConfiguration();

    $form['widget_data_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Data Key'),
      '#description' => $this->t('The data-key value from the JSD Widget settings.'),
      '#default_value' => isset($config['widget_data_key']) ? $config['widget_data_key'] : '',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    parent::blockSubmit($form, $form_state);
    $values = $form_state->getValues();
    $this->configuration['widget_data_key'] = $values['widget_data_key'];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
  	$config = $this->getConfiguration();
  	$data_key = $config['widget_data_key'];

    return [
      '#markup' => $this->t('<script data-jsd-embedded data-key="' . $data_key . '" data-base-url="https://jsd-widget.atlassian.com" src="https://jsd-widget.atlassian.com/assets/embed.js"></script>'),
    ];
  }

}
