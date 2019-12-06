
import gspread
from oauth2client.service_account import ServiceAccountCredentials

YEAR_HEADER = 'year'

# use creds to create a client to interact with the Google Drive API
scope = ['https://spreadsheets.google.com/feeds',
         'https://www.googleapis.com/auth/drive']
creds = ServiceAccountCredentials.from_json_keyfile_name('client_secret.json', scope)
client = gspread.authorize(creds)

# Find a workbook by name and open the first sheet
# Make sure you use the right name here.
spread = client.open("Batido")
# sheet = spread.sheet1


def get_players(players_name, event, year):
  # print("get_players({}, {}, {})".format(players_name, event, year))
  sheet = spread.worksheet("players-{}-{}".format(event, players_name))
  all_records = sheet.get_all_records()
  year_row = filter(lambda r : _get_row_by_year(r, year), all_records)[0]
  players = {k:v for (k, v) in year_row.items() if v and int(v) == 1}
  return list(players.keys())


def get_player_names(players_name, players):
  # print("get_player_names({}, {})".format(players_name, players))
  sheet = spread.worksheet("{}".format(players_name))
  all_records = sheet.get_all_records()
  return {k['id']:k['name'] for k in all_records if k['id'] in players}


def get_players_last_results(players_name, event, year, years_ago):
  # print("get_players_last_results({}, {}, {}, {})".format(players_name, event, year, years_ago))
  sheet = spread.worksheet("resultados-{}-{}".format(event, players_name))
  all_records = sheet.get_all_records()

  results = {}
  for y in range(year-1, year-1-years_ago, -1):
    year_results = filter(lambda r : _get_row_by_year(r, y), all_records)[0]
    for player in year_results:
      if player == YEAR_HEADER:
        continue
      if player not in results:
        results[player] = []
      results[player].append(year_results[player])

  return results


def _get_row_by_year(row, year):
    return row['year'] == year
