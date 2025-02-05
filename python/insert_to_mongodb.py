import pandas as pd
from pymongo import MongoClient

# Load data dari file Excel
file_path = 'dataaset.xlsx'
df = pd.read_excel(file_path, sheet_name='Sheet1')

# Menyambung ke MongoDB
client = MongoClient('mongodb://localhost:27017/')  # Jika MongoDB berjalan di localhost
db = client['asset_operations']  # Nama database
collection = db['data_asset']  # Nama koleksi

# Konversi data ke dalam format MongoDB
data = df.to_dict(orient='records')

# Menyisipkan data ke MongoDB
collection.insert_many(data)

print("Data berhasil dimasukkan ke MongoDB")
