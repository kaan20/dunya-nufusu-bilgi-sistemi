import time
import random
import threading
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.keys import Keys
import undetected_chromedriver as uc
from fake_useragent import UserAgent
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import WebDriverException

# Danh sách các liên kết
link_list = [
    "https://streamtape.com/v/r8d7y1gbg2ib22J/OND18002.mp4",
    "https://streamtape.com/v/q9MAlR7JyKHzVP3/BOYST0247.mp4",
    "https://streamtape.com/v/XkqbbZeW7WuDY3Z/TikTok_Id_taka2003cter_2025_01_27_15_44_57.mp4",
    "https://streamtape.com/v/oWeGQMq7MKFJJyY/TikTok_Id_abskwkws_2025.02.13_07-26-15.mp4",
    "https://streamtape.com/v/vDpjlyaGoPtD14/HAPPY_NEW_YEAR_ASIAN_Lunar_New_Year_BIG_UPDATE.%EF%BF%BD%EF%BF%BDSTRAIGHT_07.mp4",
    "https://streamtape.com/v/jaK9zOOZyzUzeZD/NEW_CLIP_UPDATE_FUCK_STRAIGH_GUY_TK1107.mp4",
    "https://streamtape.com/v/8BdO9Mweaztog0j/TK_taka2003cter_2025.02.15_14-45-52.mp4",
    "https://streamtape.com/v/29aKmLYQ8KSWgB/TikTok_Id_inuya299_2025.02.16_14-36-24.mp4",
    "https://streamtape.com/v/8vBl161rowT8jm/TikTok_Id_inuya299_2025_02_07_14_54_05.mp4",
    "https://streamtape.com/v/VBQXaqQdPOTKrRp/TikTok_Id_inuya299_2025_02_02_14_42_51.mp4",
    "https://streamtape.com/v/llJbWp2epRC7MDA/TikTok_Id_inuya299_2025_02_03_14_34_25.mp4",
    "https://streamtape.com/v/pddmwejLLaFrovV/TikTok_Id_inuya299_2025_02_08_14_47_29.mp4",
    "https://streamtape.com/v/pddmwejLLaFrovV/TikTok_Id_inuya299_2025_02_08_14_47_29.mp4"
]

# Lựa chọn 3 liên kết ngẫu nhiên
selected_links = random.sample(link_list, 3)

# Di chuyển chuột ngẫu nhiên
def random_mouse_move(driver):
    try:
        window_width = driver.execute_script("return window.innerWidth;")
        window_height = driver.execute_script("return window.innerHeight;")
        action = ActionChains(driver)
        x_offset = random.randint(-window_width//2, window_width//2)
        y_offset = random.randint(-window_height//2, window_height//2)
        action.move_by_offset(x_offset, y_offset).perform()
        time.sleep(random.uniform(0.5, 1.5))  # Đảm bảo thời gian di chuyển không quá nhanh
    except WebDriverException as e:
        print(f"Error: {e}")
        driver.execute_script("window.scrollBy(0, 250);")
        time.sleep(1)

# Chức năng để xử lý từng liên kết
def process_link(link):
    # Khởi tạo driver cho từng thread
    options = webdriver.ChromeOptions()
    options.add_argument("--disable-blink-features=AutomationControlled")
    ua = UserAgent()
    options.add_argument(f"user-agent={ua.random}")
    options.add_argument('--start-maximized')
    options.add_argument('--no-sandbox')
    options.add_argument('--disable-dev-shm-usage')
    options.add_argument('--disable-gpu')

    driver = uc.Chrome(options=options)
    driver.execute_script("Object.defineProperty(navigator, 'webdriver', {get: () => undefined})")
    
    # Xử lý liên kết
    driver.get("https://www.dailymotion.com/playlist/x9dd5m")
    time.sleep(random.uniform(60, 130))
    driver.save_screenshot("screenshot_{}.png".format(time.time()))
    driver.get(link)
    time.sleep(random.uniform(1, 30))  # Thời gian nghỉ ngẫu nhiên giữa các liên kết
    random_mouse_move(driver)

    # Chờ video tải
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "plyr")))

    # Chơi video
    play_button_xpath = '//button[@data-plyr="play"]'
    WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.XPATH, play_button_xpath)))
    play_button = driver.find_element(By.XPATH, play_button_xpath)
    driver.execute_script("arguments[0].scrollIntoView(true);", play_button)
    driver.save_screenshot("screenshot_{}.png".format(time.time()))

    driver.execute_script("""
        var playButton = document.evaluate('//button[@data-plyr="play"]', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
        if (playButton) {
            playButton.scrollIntoView({ behavior: 'smooth', block: 'center' });
            setTimeout(function() { playButton.click(); }, 500);
        }
    """)
    time.sleep(5)
    random_mouse_move(driver)
    random_mouse_move(driver)

    # Tải video
    download_button_xpath = '//a[@id="downloadvideo"]'
    for _ in range(10):
        try:
            download_button = driver.find_element(By.XPATH, download_button_xpath)
            download_button.click()
            time.sleep(random.uniform(1, 3))
            random_mouse_move(driver)
            driver.save_screenshot("screenshot_{}.png".format(time.time()))
        except Exception as e:
            print(f"Error: {e}")
            break

    driver.save_screenshot("screenshot_{}.png".format(time.time()))
    time.sleep(random.uniform(250, 300))  # Thời gian nghỉ ngẫu nhiên giữa các lượt

    driver.quit()

# Hàm chính để chạy các thread
def main():
    threads = []
    
    #for link in selected_links:
     #   thread = threading.Thread(target=process_link, args=(link,))
      #  threads.append(thread)
       # thread.start()
    for i, link in enumerate(selected_links):
        thread = threading.Thread(target=process_link, args=(link,))
        threads.append(thread)
        thread.start()
        
        # Thêm delay ngẫu nhiên giữa các lần bắt đầu thread
        if i < len(selected_links) - 1:
            delay = random.uniform(3, 7)  # Thêm khoảng delay giữa các thread (3 đến 7 giây)
            print(f"Waiting for {delay} seconds before starting next thread...")
            time.sleep(delay)
    
    # Đợi tất cả các thread hoàn thành
    for thread in threads:
        thread.join()

if __name__ == "__main__":
    main()
