// URL of the API endpoint
import { api } from '../db/env.js';

// Fungsi umum untuk mendapatkan data dari API dan mengisi elemen HTML
async function fetchDataAndPopulateDropdown(url, dropdownElement, optionCallback) {
    const apiUrl = await fetch(`${api}/${url}`);
    const data = await apiUrl.json();

    data.data.forEach((field) => {
        optionCallback(field.id, field.status, dropdownElement);
    });
}

// Fungsi umum untuk menambahkan opsi ke dropdown
const addOptionToDropdown = (id, status, dropdownElement) => {
    const option = document.createElement('option');
    option.value = id;
    option.text = status;
    dropdownElement.add(option);
};

// keadaan orangtua
const keadaanOrangTua = document.getElementById("select-keadaan-ortu");
fetchDataAndPopulateDropdown('keadaan-orang-tua', keadaanOrangTua, addOptionToDropdown);

// tinggal bersama
const tinggalBersama = document.getElementById("select-tinggal-bersama");
fetchDataAndPopulateDropdown('tinggal-bersama', tinggalBersama, addOptionToDropdown);

// status dalam keluarga
const statusDalamKeluarga = document.getElementById("select-status-dalam-keluarga");
fetchDataAndPopulateDropdown('status-dalam-keluarga', statusDalamKeluarga, addOptionToDropdown);

//penerima bantuan sosial
const penerimaBantuanSosial = document.getElementById("select-penerima-bansos");
fetchDataAndPopulateDropdown('penerima-bantuan-sosial', penerimaBantuanSosial, addOptionToDropdown);

//status kepemilikan rumah
const statusKepemilikanRumah = document.getElementById("select-kepemilikan-rumah");
fetchDataAndPopulateDropdown('status-kepemilikan-rumah', statusKepemilikanRumah, addOptionToDropdown);

//pendidikan ayah
const pendidikanAyah = document.getElementById("select-pendidikan-ayah");
fetchDataAndPopulateDropdown('pendidikan', pendidikanAyah, addOptionToDropdown);

//pendidikan ibu
const pendidikanIbu = document.getElementById("select-pendidikan-ibu");
fetchDataAndPopulateDropdown('pendidikan', pendidikanIbu, addOptionToDropdown);

//informasi ppdb
const informasiPpdb = document.getElementById("select-informasi-ppdb");
fetchDataAndPopulateDropdown('informasi-ppdb', informasiPpdb, addOptionToDropdown);

//kualitas rumah
const kualitasRumah = document.getElementById("select-kualitas-rumah");
fetchDataAndPopulateDropdown('kualitas-rumah', kualitasRumah, addOptionToDropdown);

//luas tanah
const luasTanah = document.getElementById("select-luas-tanah");
fetchDataAndPopulateDropdown('luas-tanah', luasTanah, addOptionToDropdown);

//sumber air
const sumberAir = document.getElementById("select-sumber-air");
fetchDataAndPopulateDropdown('sumber-air', sumberAir, addOptionToDropdown);

//mandi cuci kakus
const mandiCuciKakus = document.getElementById("select-mandi-cuci-kakus");
fetchDataAndPopulateDropdown('mandi-cuci-kakus', mandiCuciKakus, addOptionToDropdown);

//daya listrik
const dayaListrik = document.getElementById("select-daya-listrik");
fetchDataAndPopulateDropdown('daya-listrik', dayaListrik, addOptionToDropdown);

//harta tidak bergerak
const hartaTidakBergerak = document.getElementById("select-harta-tidak-bergerak");
fetchDataAndPopulateDropdown('harta-tidak-bergerak', hartaTidakBergerak, addOptionToDropdown);

//status harta tidak bergerak
const statusHartaTidakBergerak = document.getElementById("select-status-harta-tidak-bergerak");
fetchDataAndPopulateDropdown('status-harta-tidak-bergerak', statusHartaTidakBergerak, addOptionToDropdown);

//kepemilikan kendaraan
const kepemilikanKendaraan = document.getElementById("select-kepemilikan-kendaraan");
fetchDataAndPopulateDropdown('kepemilikan-kendaraan', kepemilikanKendaraan, addOptionToDropdown);

//kepemilikan kendaraan
const statusKepemilikanKendaraan = document.getElementById("select-status-kepemilikan-kendaraan");
fetchDataAndPopulateDropdown('status-kepemilikan-kendaraan', statusKepemilikanKendaraan, addOptionToDropdown);

//golongan darah
const golonganDarah = document.getElementById("select-golongan-darah");
fetchDataAndPopulateDropdown('golongan-darah', golonganDarah, addOptionToDropdown);

//sumber penghasilan
const sumberPenghasilan = document.getElementById("select-sumber-penghasilan");
fetchDataAndPopulateDropdown('sumber-penghasilan', sumberPenghasilan, addOptionToDropdown);

//provinsi
const Provinsi = document.getElementById("select-provinsi");
// fetchDataAndPopulateDropdown('provinsi', Provinsi, addOptionToDropdown);

async function getProvinsi() {
    const apiUrl = await fetch(`${api}/provinsi`);
    const data = await apiUrl.json();

    data.data.forEach((field) => {
        selectProvinsi(field.id, field.name)
    });
}
const selectProvinsi = (id, name, option) => {
    const dataLet = `<option value="${id}">${name}</option>`
    Provinsi.innerHTML += dataLet
}

//tahun lulus
const tahunLulus = document.getElementById("select-tahun-lulus");
// fetchDataAndPopulateDropdown('tahun-lulus', tahunLulus, addOptionToDropdown);

async function getTahunLulus() {
    const apiUrl = await fetch(`${api}/tahun-lulus`);
    const data = await apiUrl.json();

    data.data.forEach((field) => {
        selectTahunLulus(field.id, field.tahun)
    });
}
const selectTahunLulus = (id, tahun, option) => {
    const dataLet = `<option value="${id}">${tahun}</option>`
    tahunLulus.innerHTML += dataLet
}

//tahun pelajaran
const tahunPelajaran = document.getElementById("select-tahun-pelajaran");

async function getTahunPelajaran() {
    const apiUrl = await fetch(`${api}/tahun-pelajaran`);
    const data = await apiUrl.json();

    data.data.forEach((field) => {
        selectTahunPelajaran(field.id, field.tahun_pelajaran)
    });
}
const selectTahunPelajaran = (id, tahun, option) => {
    const dataLet = `<option value="${id}">${tahun}</option>`
    tahunPelajaran.innerHTML += dataLet
}

function getAllApi() {
    getProvinsi();
    getTahunLulus();
    getTahunPelajaran();
}

getAllApi();

// function getPushApi(){}
