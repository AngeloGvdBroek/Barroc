using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using MySql.Data.MySqlClient;

namespace barrocFactuur
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        //string MySQLConnectionString = "datasource=127.0.0.1;port=3306;username=root;possword=;database=barroc";

        //MySqlConnection databaseConnection = new MySqlConnection(MySQLConnectionString);
        public MainWindow()
        {
            InitializeComponent();
        }

        private void Incoicesee_Click(object sender, RoutedEventArgs e)
        {
            ShowLeases win3 = new ShowLeases();
            win3.Show();
            this.Close();
        }

        private void Invoicecreate_Click(object sender, RoutedEventArgs e)
        {
            CreateIncoives win2 = new CreateIncoives();
            win2.Show();
            this.Close();
        }
    }
}
