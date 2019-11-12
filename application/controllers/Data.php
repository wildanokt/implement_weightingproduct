<?php

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penghitungan', 'hitung');
    }

    public function index()
    {
        $data = [
            'rekomendasi' => $this->hitung->getRekomendasi(),
            'items' => $this->hitung->getData(),
            'vector' => $this->hitung->getVectorSI(1),
            'prioritas' => $this->hitung->getPrioritasBobot(),
            'total_bobot' => $this->hitung->getTotalBobot(),
        ];

        $this->load->view("main/header");
        $this->load->view("main/index", $data);
        $this->load->view("main/footer");
    }

    public function insert()
    {
        if ($_POST) {
            $data = [
                'nama' => $this->input->post('nama'),
                'jarak' => $this->input->post('jarak'),
                'htm' => $this->input->post('htm'),
                'rating' => $this->input->post('rating'),
                'jumlah_kolam' => $this->input->post('jumlah_kolam'),
                'kualitas_air' => $this->input->post('kualitas_air'),
            ];

            $this->hitung->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dimasukkan
            </div>');
            redirect(base_url());
        } else {
            $this->load->view("main/header");
            $this->load->view("main/insert");
            $this->load->view("main/footer");
        }
    }

    public function update_bobot()
    {
        if ($_POST) {
            $data = [
                'id' => $this->input->post('id'),
                'jarak' => $this->input->post('jarak'),
                'htm' => $this->input->post('htm'),
                'rating' => $this->input->post('rating'),
                'jumlah_kolam' => $this->input->post('jumlah_kolam'),
                'kualitas_air' => $this->input->post('kualitas_air'),
            ];

            $this->hitung->update_bobot($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Bobot berhasil diperbarui
            </div>');
            redirect(base_url());
        } else {

            $bobot = $this->hitung->getBobot();

            $this->load->view("main/header");
            $this->load->view("main/update_bobot", $bobot);
            $this->load->view("main/footer");
        }
    }

    public function delete($id)
    {
        $this->hitung->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dihapus
            </div>');
        redirect(base_url());
    }

    public function rekomendasi()
    {
        $data = [
            'rekomendasi' => $this->hitung->getRekomendasi()
        ];

        $this->load->view("main/header");
        $this->load->view("main/rekomendasi", $data);
        $this->load->view("main/footer");
    }

    public function calculation()
    {
        $data = [
            'bobot' => $this->hitung->getBobot(),
            'total_bobot' => $this->hitung->getTotalBobot(),
            'prioritas' => $this->hitung->getPrioritasBobot(),
            'items' => $this->hitung->getData(),
            'si' => [],
            'total_si' => $this->hitung->getTotalSI(),
            'rekomendasi' => $this->hitung->getRekomendasi(),
        ];

        $id = $this->hitung->getId();
        for ($i = 0; $i < count($id); $i++) {
            array_push($data['si'], $this->hitung->getVectorSI($id[$i]));
        }

        $this->load->view("main/header");
        $this->load->view("main/calculation", $data);
        $this->load->view("main/footer");
    }
}
