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

function autoComplete(mixed $param = '', mixed $error = '', mixed $success = ''): string
{
    if (!$param) {
        if ($error) {
            return $error;
        }
    } elseif ($param) {
        if ($success) {
            return $success;
        }
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

    return '<p class="message green">проверка пройдена</p>';
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
