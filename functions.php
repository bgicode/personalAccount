<?php
function validation($regEx, $field)
{
    $options = [
        'options' => [
            'regexp' => $regEx
        ]
    ];
    if (filter_var($field, FILTER_VALIDATE_REGEXP, $options)) {
        return true;
    } else {
        return false;
    }
}

function autoComplete(mixed $field = ''): string
{
    if ($field) {
        return $field;
    }

    return '';
}

function validMessage(mixed $field, mixed $check, string $errMessage = 'недопустимые символы'): string
{
    if ($check) {
        $color = 'green';
        $message = 'соотвестует правилу ввода';
    } else {
        $color = 'red';
        $message = $errMessage;
    }

    if ($field) {
        return '<p class="message ' . $color . '">' . $message . '</p>';
    }

    return '<p class="message green">соответствует правилу ввода</p>';
}

function read(string $dataPath): array
{
    if (($file = fopen($dataPath, 'r')) !== false) {
        while (($data = fgetcsv($file, 1000, ';')) !== false) {
            $arWritingLines[] = $data;
        }
    }

    fclose($file);

    return $arWritingLines;
}

function redirect(string $extra): void
{
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    
    header("Location: http://$host$uri/$extra");
}
