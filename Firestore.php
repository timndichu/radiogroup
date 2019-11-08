<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 * Created by Arthur Mann.
 * Date: 10/05/2019
 * Time: 21:13
 * @important Do not forget install Firestore dependency
 * $ composer require google/cloud-firestore
 */

require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

class Firestore {
    protected $db;
    protected $name;
    public function __construct(string $collection)
    {
        try {
            $this->db = new FirestoreClient([
                'projectId' => 'phpbase-3ffca'
            ]);
        } catch (\Google\Cloud\Core\Exception\GoogleException $e) {
        }

        $this->name = $collection;
    }


    /**
     * Get document and all data with checking for exists
     * @param string $name
     * @return array|null|string
     */
    public function getDocument(string $name)
    {
        try {
            if (empty($name)) throw new Exception('Document name missing');
            if ($this->db->collection($this->name)->document($name)->snapshot()->exists()) {
                return $this->db->collection($this->name)->document($name)->snapshot()->data();
            } else {
                throw new Exception('Document are not exists');
            }
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }


    }