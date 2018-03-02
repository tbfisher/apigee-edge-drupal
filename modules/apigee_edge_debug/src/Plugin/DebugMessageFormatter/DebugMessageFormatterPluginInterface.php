<?php

/**
 * Copyright 2018 Google Inc.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * version 2 as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

namespace Drupal\apigee_edge_debug\Plugin\DebugMessageFormatter;

use GuzzleHttp\TransferStats;
use Http\Message\Formatter;

interface DebugMessageFormatterPluginInterface extends Formatter {

  /**
   * Returns the ID of the debug message formatter plugin.
   *
   * @return string
   *   The ID of the debug message formatter plugin.
   */
  public function getId() : string;

  /**
   * Returns the label of the debug message formatter plugin.
   *
   * @return string
   *   The label of the debug message formatter plugin.
   */
  public function getLabel() : string;

  /**
   * Formats stats object.
   *
   * @param \GuzzleHttp\TransferStats $stats
   *   Transfer statistics.
   *
   * @return string
   *   Formatted output.
   */
  public function formatStats(TransferStats $stats) : string;

}