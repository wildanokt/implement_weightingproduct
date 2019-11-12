<?php

class penghitungan extends CI_Model
{

    public function getData()
    {
        return $this->db->get('data')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('data', $data);
    }

    public function update_bobot($data)
    {
        $this->db->update('bobot', $data, ['id' => $data['id']]);
    }

    public function delete($id)
    {
        $this->db->delete('data', ['id' => $id]);
    }

    //---------------------- weighting product function ---------------------------//

    public function getBobot()
    {
        return $this->db->get('bobot')->row_array();
    }

    public function getTotalBobot()
    {
        $data = $this->db->get('bobot')->row_array();
        $bobot = $data['jarak'] + $data['htm'] + $data['rating'] + $data['jumlah_kolam'] + $data['kualitas_air'];
        return $bobot;
    }

    public function getPrioritasBobot()
    {
        $result = [];
        $data = $this->db->get('bobot')->row_array();
        $total = $this->getTotalBobot();
        $result['jarak'] = (float) ($data['jarak'] / $total);
        $result['htm'] = (float) ($data['htm'] / $total);
        $result['rating'] = (float) ($data['rating'] / $total);
        $result['jumlah_kolam'] = (float) ($data['jumlah_kolam'] / $total);
        $result['kualitas_air'] = (float) ($data['kualitas_air'] / $total);
        return $result;
    }

    public function getVectorSI($id)
    {
        $result = [];
        $data = $this->db->get_where('data', ['id' => $id])->row_array();
        $bobot = $this->getPrioritasBobot();
        $result['nama'] = $data['nama'];
        $result['jarak'] = (float) (1 / ($data['jarak'] ** $bobot['jarak']));
        $result['htm'] = (float) (1 / ($data['htm'] ** $bobot['htm']));
        $result['rating'] = (float) ($data['rating'] ** $bobot['rating']);
        $result['jumlah_kolam'] = (float) ($data['jumlah_kolam'] ** $bobot['jumlah_kolam']);
        $result['kualitas_air'] = (float) ($data['kualitas_air'] ** $bobot['kualitas_air']);
        $result['vector_si'] = $result['jarak'] * $result['htm'] * $result['rating'] * $result['jumlah_kolam'] *    $result['kualitas_air'];
        return $result;
    }

    public function getTotalSI()
    {
        $id = $this->getId();
        $total_si = 0;
        for ($i = 0; $i < count($id); $i++) {
            $total_si += (float) $this->getVectorSI($id[$i])['vector_si'];
        }
        return $total_si;
    }

    public function getVectorVI($id)
    {
        $si = $this->getVectorSI($id)['vector_si'];
        return (float) $si / $this->getTotalSI();
    }

    public function getRekomendasi()
    {
        $result = [];
        $data = $this->getData();
        for ($i = 0; $i < $this->getJumlahData(); $i++) {
            $result[$data[$i]['nama']] = $this->getVectorVI($data[$i]['id']);
        }
        arsort($result);
        return $result;
    }

    //---------------------- private function ---------------------------//

    public function getId()
    {
        $id = [];
        $data = $this->db->get('data')->result_array();
        foreach ($data as $item) {
            array_push($id, $item['id']);
        }
        return $id;
    }

    private function getJumlahData()
    {
        return $this->db->get('data')->num_rows();
    }
}
