<?hh // strict
/**
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */
namespace Facebook\ShipIt\Config;

interface IShipItConfig {
  public static function getBaseConfig(): \Facebook\ShipIt\ShipItBaseConfig;
  public static function getPhases(): ImmVector<\Facebook\ShipIt\ShipItPhase>;
}
