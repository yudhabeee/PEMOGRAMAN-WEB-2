# Program Penghitung Diskon
def hitung_diskon(jumlah_bayar):
    if jumlah_bayar >= 500000:
        diskon = 0.5  # Diskon 50%
    elif jumlah_bayar >= 100000:
        diskon = 0.1  # Diskon 10%
    elif jumlah_bayar >= 50000:
        diskon = 0.05  # Diskon 5%
    else:
        diskon = 0.0  # Diskon 0%

    jumlah_diskon = jumlah_bayar * diskon
    total_bayar = jumlah_bayar - jumlah_diskon
    return jumlah_diskon, total_bayar

# Contoh Penggunaan
# Kasus 1: Pembelian dengan jumlah bayar 30.000
jumlah_bayar1 = 30000
diskon1, total_bayar1 = hitung_diskon(jumlah_bayar1)
print(f"Pembelian: {jumlah_bayar1}, Diskon: {diskon1}, Total Bayar: {total_bayar1}")