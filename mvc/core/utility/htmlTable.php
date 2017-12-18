<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="8" bordercolor="black" align="center" cellpadding="10" bgcolor="#d3d3d3" >';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th bgcolor="#708090">' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">view</a></td>';

                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="8" align="center" cellpadding="10" bgcolor="#b0c4de">';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }

    public static function genarateTableFromMultiArra($array)
    {

        $tableGen = '<table border="8" bordercolor="black" align="center" cellpadding="10" bgcolor="#bc8f8f">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th bgcolor="#708090">' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {


                    $tableGen .= '<td>' . $value .  '</td>';

                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }


}

?>