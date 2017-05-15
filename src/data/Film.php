<?php

class Film extends ORM
{
    public static $tableName = "films";
    public static $fields = [
        'id'                    => 'i',
        'date'                  => 's',
        'heure'                 => 's',
        'nom'                   => 's',
        'nb_participations'     => 'i',
    ];

    public static $computedFields = [];

    /**
     * Adds a participation to target film
     * @param $id
     */
    public static function addParticipation($id)
    {
        $Film = self::findOneByWhere("id = :id", [':id' => (int) $id]);

        if ($Film instanceof Film) {
            $Film->set("nb_participations", $Film->get('nb_participations') + 1);
            $Film->save();
        }
    }
}