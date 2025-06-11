<?php

namespace Grimzy\LaravelMysqlSpatial\Schema;

use Illuminate\Database\Schema\Blueprint as IlluminateBlueprint;

class Blueprint extends IlluminateBlueprint
{
    /**
     * Add a geometry column on the table.
     *
     * @param string      $column
     * @param string|null $subtype
     * @param int         $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function geometry($column, $subtype = null, $srid = 0)
    {
        $attributes = [];
        if ($subtype !== null) {
            $attributes['subtype'] = $subtype;
        }
        if ($srid !== 0) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('geometry', $column, $attributes);
    }

    /**
     * Add a point column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function point($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('point', $column, $attributes);
    }

    /**
     * Add a linestring column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function lineString($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('linestring', $column, $attributes);
    }

    /**
     * Add a polygon column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function polygon($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('polygon', $column, $attributes);
    }

    /**
     * Add a multipoint column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function multiPoint($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('multipoint', $column, $attributes);
    }

    /**
     * Add a multilinestring column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function multiLineString($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('multilinestring', $column, $attributes);
    }

    /**
     * Add a multipolygon column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function multiPolygon($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('multipolygon', $column, $attributes);
    }

    /**
     * Add a geometrycollection column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return \Illuminate\Support\Fluent
     */
    public function geometryCollection($column, $srid = null)
    {
        $attributes = [];
        if ($srid !== null) {
            $attributes['srid'] = $srid;
        }
        return $this->addColumn('geometrycollection', $column, $attributes);
    }

    /**
     * Specify a spatial index for the table.
     *
     * @param string|array $columns
     * @param string       $name
     *
     * @return \Illuminate\Support\Fluent
     */
    public function spatialIndex($columns, $name = null)
    {
        return $this->indexCommand('spatial', $columns, $name);
    }

    /**
     * Indicate that the given index should be dropped.
     *
     * @param string|array $index
     *
     * @return \Illuminate\Support\Fluent
     */
    public function dropSpatialIndex($index)
    {
        return $this->dropIndexCommand('dropIndex', 'spatial', $index);
    }
}
