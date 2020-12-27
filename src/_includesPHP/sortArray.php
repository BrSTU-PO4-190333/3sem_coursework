<?php
    if (isset($_GET['sort_by'])) // если есть GET запрос
    {
        $sort_by = $_GET['sort_by']; // получили значение GET запроса

        if ($sort_by == "id")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ($arr[$i]['id'] < $arr[$j]['id'])
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }
        else if ($sort_by == "model")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ( strcasecmp($arr[$i]['model'], $arr[$j]['model']) < 0 )
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }
        else if ($sort_by == "name")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ( strcasecmp($arr[$i]['name'], $arr[$j]['name']) > 0 )
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }
        else if ($sort_by == "onBox")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ($arr[$i]['onBox'] < $arr[$j]['onBox'])
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }
        else if ($sort_by == "weight")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ($arr[$i]['weight'] < $arr[$j]['weight'])
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }
        else if ($sort_by == "m3")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ($arr[$i]['m3'] < $arr[$j]['m3'])
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }
        else if ($sort_by == "series")
        {
            for ($i = 0; $i < count($arr); $i += 1)
            {
                for ($j = 0; $j < count($arr); $j += 1)
                {
                    if ( strcasecmp($arr[$i]['series'], $arr[$j]['series']) > 0 )
                    {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }
            }
        }

    }