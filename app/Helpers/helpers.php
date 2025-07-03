<?php

function getEnumValue( $enum){
    return $enum->value;
}
function fromValue(string $value, object $enum)
    {
    foreach ($enum::cases() as $case) {
        if ($case->value === $value) {
            return $case;
        }
    }
    throw new \ValueError("$value is not a valid backing value for enum ");
}