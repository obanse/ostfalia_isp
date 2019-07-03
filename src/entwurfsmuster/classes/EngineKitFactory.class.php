<?php

class EngineKitFactory {

    public static function createEngineKit($type) {
        try {
            $engineKit = new $type();
        } catch (Exception $e) {
            $engineKit = new GasEngineKit();
        }
        return $engineKit;
    }
}